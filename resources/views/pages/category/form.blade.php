@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" x-data="FORMS.category({{ isset($category) ? $category->toJson() : 'undefined' }})"
                    x-init="initV" @input="V" @change="V" @focusout="V">
                    <div class="card-header" x-text="title"></div>

                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <div class="form-group row validated">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        :class="{'form-control': true, 'is-invalid': hasErrors('name') && isTouched('name')}"
                                        id="name" name="name" placeholder="Name" x-model="form.name">
                                    <div class="invalid-feedback" x-html="getErrors('name')">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row validated">
                                <label for="active" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select
                                        :class="{'form-control': true, 'is-invalid': hasErrors('active') && isTouched('active')}"
                                        id="active" name="active" x-model="form.active">
                                        <option value="">-- Select --</option>
                                        <option value="1">Active</option>
                                        <option value="0">In-Active</option>
                                    </select>
                                    <div class="invalid-feedback" x-html="getErrors('active')">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row validated">
                                <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                                <div class="col-sm-10">
                                    <textarea
                                        :class="{'form-control': true, 'is-invalid': hasErrors('notes') && isTouched('notes')}"
                                        placeholder="Notes..." id="notes" name="notes" x-model="form.notes"></textarea>
                                    <div class="invalid-feedback" x-html="getErrors('notes')">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" :disabled="hasErrors()">Save
                                        Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
