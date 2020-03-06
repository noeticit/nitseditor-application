<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (! function_exists('nits_plugins')) {
    /**
     * Getting all the plugins
     */
    function nits_plugins()
    {
        $files = File::directories(base_path('plugins'));
        $plugins = collect($files)->map(function ($item) {
            return preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(base_path('plugins'), "", $item));
        });
        return $plugins;
    }
}

if (! function_exists('get_plugin_stub')) {
    /**
     * Get the stubs
     * @param $type
     * @return bool|string
     */
    function get_plugin_stub($type)
    {
        return file_get_contents(base_path("vendor/nitseditor/framework/src/Stubs/$type.stub"));
    }
}

if (! function_exists('nits_get_plugin_config')) {

    /**
     * Retrieving data from plugins
     */

    function nits_get_plugin_config($key) {
        $keyPairs = explode('.', $key);
        $config = '';
        foreach($keyPairs as $key=>$value)
        {
            if($key == 0)
            {
                if(File::exists(base_path('plugins/'.$value.'/config.php')))
                {
                    $config = include(base_path('plugins/'.$value.'/config.php'));
                }
            }
            else
            {
                if(isset($config[$value]))
                    $config = $config[$value];
                else
                {
                    $config = null;
                    break;
                }
            }

        }

        return $config;
    }
}

if(!function_exists('nits_config')) {

    /**
     * App settings/config
     */

    function nits_config($key)
    {
        $data = DB::table('app_settings')->where('key', $key)->first();

        return $data ? $data->value: null;
    }
}

if(! function_exists('document_s3_upload')) {

    function document_s3_upload($dir, $data, $file_name)
    {
        $pos = strpos($data, ';');
        $type = explode(':', substr($data, 0, $pos))[1];
        $format = explode('/', $type);

        $exploded = explode(',', $data);

        $decoded = base64_decode($exploded[1]);

        if (Str::contains($exploded[0], $format[1])) {
            $extension = $format[1];
        }

        $fileName = $file_name ? $file_name : str_random() . '.' . $extension;

        $path = Storage::disk('s3')->put(env('APP_NAME').'/'.$dir.'/'.$fileName, $decoded, 'public'); // only  for decoded file.

        if (env('AWS_CLOUD_FRONT'))
            return env('AWS_CLOUD_FRONT') . '/'. env('APP_NAME').'/'.$dir.'/'.$fileName;
        else
            return env('AWS_URL') . '/' . env('AWS_BUCKET') . '/' . env('APP_NAME').'/'.$dir.'/'.$fileName;
    }
}
