<?php

namespace Nitseditor\Application\Traits;

trait NitsSearch {

    protected $operators = [
        'equal' => '=',
        'not_equal' => '<>',
        'less_than' => '<',
        'greater_than' => '>',
        'less_than_or_equal_to' => '<=',
        'greater_than_or_equal_to' => '>=',
        'in' => 'IN',
        'like' => 'LIKE'
    ];


    public function scopeSearch($q)
    {
        $request = app()->make('request');
        $search = $request->search;

//        return $q->when(count($search), function() {
//            $q->where(function ($q) use($search) {
//                for($i = 0; $i < count($search); $i++) {
//                    if($search->relational) {
//                        $q->when($search->search_input, function ($q) use($search) {
//                            if($search->relation_type == 'whereHas') {
//                                $q->whereHas($search->search_field, function ($q) use($search) {
//                                    if($search->search_type == 'where') {
//                                        if($search->search_operator == 'like')
//                                            $q->where($search->relational_field, 'like', '%'.$search->search_input.'%');
//                                        else if($search->search_operator == 'in')
//                                            $q->whereIn($search->relational_field, collect($search->search_input)->pluck('id'));
//                                        else
//                                            $q->where($search->relational_field, $this->operators[$search->search_operator], $search->search_input);
//                                    }
//                                    elseif ($search->search_type == 'orWhere') {
//                                        if($search->search_operator == 'like')
//                                            $q->orWhere($search->relational_field, 'like', '%'.$search->search_input.'%');
//                                        else
//                                            $q->orWhere($search->relational_field, $this->operators[$search->search_operator], $search->search_input);
//                                    }
//                                });
//                            }
//                        });
//                    }
//                }
//            });
//        });

        return $q;
    }
}
