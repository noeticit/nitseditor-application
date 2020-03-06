<template>
    <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="step-first">

        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v4__nav">
            <div class="kt-wizard-v4__nav-items nav">
                <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
                    <div class="kt-wizard-v4__nav-body">
                        <div class="kt-wizard-v4__nav-number">
                            1
                        </div>
                        <div class="kt-wizard-v4__nav-label">
                            <div class="kt-wizard-v4__nav-label-title">
                                Profile
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                User's Personal Information
                            </div>
                        </div>
                    </div>
                </a>
                <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step">
                    <div class="kt-wizard-v4__nav-body">
                        <div class="kt-wizard-v4__nav-number">
                            2
                        </div>
                        <div class="kt-wizard-v4__nav-label">
                            <div class="kt-wizard-v4__nav-label-title">
                                Account
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                User's Account & Settings
                            </div>
                        </div>
                    </div>
                </a>
                <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step">
                    <div class="kt-wizard-v4__nav-body">
                        <div class="kt-wizard-v4__nav-number">
                            3
                        </div>
                        <div class="kt-wizard-v4__nav-label">
                            <div class="kt-wizard-v4__nav-label-title">
                                Address
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                User's Shipping Address
                            </div>
                        </div>
                    </div>
                </a>
                <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step">
                    <div class="kt-wizard-v4__nav-body">
                        <div class="kt-wizard-v4__nav-number">
                            4
                        </div>
                        <div class="kt-wizard-v4__nav-label">
                            <div class="kt-wizard-v4__nav-label-title">
                                Submission
                            </div>
                            <div class="kt-wizard-v4__nav-label-desc">
                                Review and Submit
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--end: Form Wizard Nav -->
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid">
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                        <!--begin: Form Wizard Form-->
                        <form class="kt-form" id="kt_apps_user_add_user_form">

                            <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">User's Profile Details:</div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-wizard-v4__form">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
                                                                <div class="kt-avatar__holder" style="background-image: url(./assets/media/users/300_10.jpg)"></div>
                                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen"></i>
                                                                    <input type="file" name="kt_apps_user_add_user_avatar">
                                                                </label>
                                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																							<i class="fa fa-times"></i>
																						</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control" type="text" value="Anna">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control" type="text" value="Krox">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control" type="text" value="Loop Inc.">
                                                            <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                <input type="text" class="form-control" value="+45678967456" placeholder="Phone" aria-describedby="basic-addon1">
                                                            </div>
                                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                <input type="text" class="form-control" value="anna.krox@loop.com" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Username" value="loop">
                                                                <div class="input-group-append"><span class="input-group-text">.com</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 1-->

                            <!--begin: Form Wizard Step 2-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-wizard-v4__form">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-md">User's Account Details</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control" type="text" value="Anna">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                <input type="text" class="form-control" value="nick.watson@loop.com" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                            <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select class="form-control">
                                                                <option>Select Language...</option>
                                                                <option value="id">Bahasa Indonesia - Indonesian</option>
                                                                <option value="msa">Bahasa Melayu - Malay</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select class="form-control">
                                                                <option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                                <option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-checkbox-inline">
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox" checked=""> Email
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox" checked=""> SMS
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox"> Phone
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-md">User's Account Settings</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
                                                            <span class="form-text text-muted">
																						After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																						<a href="#" class="kt-link">Learn more</a>.
																					</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-checkbox-single">
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox"> Require personal information to reset your password.
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                            <span class="form-text text-muted">
																						For extra security, this requires you to confirm your email or phone number when you reset your password.
																						<a href="#" class="kt-link">Learn more</a>.
																					</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 2-->

                            <!--begin: Form Wizard Step 3-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Setup Your Address</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v4__form">
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control" name="address1" placeholder="Address Line 1" value="Address Line 1">
                                            <span class="form-text text-muted">Please enter your Address.</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control" name="address2" placeholder="Address Line 2" value="Address Line 2">
                                            <span class="form-text text-muted">Please enter your Address.</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Postcode</label>
                                                    <input type="text" class="form-control" name="postcode" placeholder="Postcode" value="2000">
                                                    <span class="form-text text-muted">Please enter your Postcode.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" name="state" placeholder="City" value="London">
                                                    <span class="form-text text-muted">Please enter your City.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" name="state" placeholder="State" value="VIC">
                                                    <span class="form-text text-muted">Please enter your Postcode.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Country:</label>
                                                    <select name="country" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 3-->

                            <!--begin: Form Wizard Step 4-->
                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v4__review">
                                        <div class="kt-wizard-v4__review-item">
                                            <div class="kt-wizard-v4__review-title">
                                                Your Account Details
                                            </div>
                                            <div class="kt-wizard-v4__review-content">
                                                John Wick
                                                <br /> Phone: +61412345678
                                                <br /> Email: johnwick@reeves.com
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v4__review-item">
                                            <div class="kt-wizard-v4__review-title">
                                                Your Address Details
                                            </div>
                                            <div class="kt-wizard-v4__review-content">
                                                Address Line 1
                                                <br /> Address Line 2
                                                <br /> Melbourne 3000, VIC, Australia
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v4__review-item">
                                            <div class="kt-wizard-v4__review-title">
                                                Payment Details
                                            </div>
                                            <div class="kt-wizard-v4__review-content">
                                                Card Number: xxxx xxxx xxxx 1111
                                                <br /> Card Name: John Wick
                                                <br /> Card Expiry: 01/21
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 4-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                    Previous
                                </div>
                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                    Submit
                                </div>
                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                    Next Step
                                </div>
                            </div>

                            <!--end: Form Actions -->
                        </form>

                        <!--end: Form Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {KTUtil} from 'NitsTheme/framework/lib/util';
    import {KTWizard} from 'NitsTheme/framework/components/foundation/wizard/wizard';

    export default {
        name: "form-wizard-2",
        mounted() {
            // Class definition
            var KTAppUserAdd = function () {
                // Base elements
                var wizard;

                // Private functions
                var initWizard = function () {
                    // Initialize form wizard
                    wizard = new KTWizard('kt_apps_user_add_user', {
                        startStep: 1,
                    });

                    // Validation before going to next page
                    wizard.on('beforeNext', function(wizardObj) {
                        //
                    })

                    // Change event
                    wizard.on('change', function(wizard) {
                        KTUtil.scrollTop();
                    });
                }


                return {
                    // public functions
                    init: function() {

                        initWizard();
                    }
                };
            }();

            jQuery(document).ready(function() {
                KTAppUserAdd.init();
            });
        }
    }
</script>

<style lang="scss" scoped>
    @import "./../../../theme/app/custom/wizard/wizard-v4";
</style>

