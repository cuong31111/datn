
@extends('admin.layouts.master')

@section('content')
    <div class="cr-main-content">
        <div class="container-fluid">
            <div class="cr-page-title cr-page-title-2">
                <div class="cr-breadcrumb">
                    <h5>Manage Variations for {{ $product->name }}</h5>
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('admin.product.product-list') }}">Product List</a></li>
                        <li>Variations</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="cr-card card-default product-list">
                        <div class="cr-card-content">
                            <div class="table-responsive">
                                <table id="variation_manage" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Attributes</th>
                                            <th class="d-flex justify-content-center">Actions</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($combinations as $combination)
                                            <tr>
                                                <td>
                                                    @foreach ($combination as $item)
                                                        <strong>{{ $item->attribute->name }}:</strong>
                                                        {{ $item->attributeValue->value }}<br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('product-variations.create', ['id' => $product->id]) }}" class="btn btn-primary btn-sm">Add new</a>

                                                       
                                                        <a href="#" class="btn btn-warning btn-sm ms-2">Edit</a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                </table>
                            </div>
                        </div>

                        <div class="cr-card-footer text-end">
                            <a href="{{ route('admin.product.product-list') }}" class="btn btn-secondary">Back to Product
                                List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
