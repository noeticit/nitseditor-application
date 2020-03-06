<template>
    <div class="form-group">
        <label class="col-form-label">{{ label }}</label>
        <div class="">
            <div class="kt-dropzone dropzone" :action="uploadApi" ref="dropzoneElement" id="m-dropzone-one">
                <div class="kt-dropzone__msg dz-message needsclick">
                    <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                    <span class="kt-dropzone__msg-desc">{{ hint }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Dropzone from 'dropzone';

    Dropzone.autoDiscover = false;

    export default {
        name: "nits-dropzone",
        props: {
            label: String,
            uploadApi: String,
            hint: String,
            maxFileSize: Number,
            maxFile: Number,
            acceptedFiles: String
        },
        mounted() {
            const self = this;

            const settings = {
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: self.maxFile,
                maxFilesize: self.maxFileSize, // MB
                acceptedFiles: self.acceptedFiles,
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "output.json") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            }

            this.dropzone = new Dropzone(this.$refs.dropzoneElement, settings)

            this.dropzone.on('complete', function(file) {
                self.$emit('vdropzone-complete', file)
            })

            this.dropzone.on('processing', function(file) {
                self.$emit('vdropzone-processing', file)
            })

            this.dropzone.on('drop', function(event) {
                self.$emit('vdropzone-drop', event)
            })
        }
    }
</script>

<style lang="scss" scoped>
    @import "./../../../theme/framework/config";
    @import "./../../../theme/framework/components/vendors/dropzone/dropzone";
</style>
