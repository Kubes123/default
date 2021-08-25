@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('QUESTION 1: Inhalation is a route of entry for gases and vapours; this means that chemicals can:') }}</div>

                <div class="card-body">
                    <a class="btn btn-info btn-block" data-toggle="modal" data-target="#smallModal"
                                    > <b style="color:white;">Get into your body through breathing</b></a>
                                    
                    <a class="btn btn-info btn-block" data-toggle="modal" data-target="#smallModal2"
                                    > <b style="color:white;">Give you a heart attack</b></a>

                    <a class="btn btn-info btn-block" data-toggle="modal" data-target="#smallModal2"
                                    > <b style="color:white;">Get splashed onto your clothes</b></a>
 
                    <a class="btn btn-info btn-block" data-toggle="modal" data-target="#smallModal2"
                                    > <b style="color:white;">Get into your body by getting it onto your skin</b></a>

                                    

                    
                    {{-- @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif --}}
                    

                            
                    
                    <!-- small modal -->
                    

                    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
                        aria-hidden="true">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                
                                        <a>Correct!</a>
                                    
                                </div>
                                <div class="modal-body" id="smallBody">
                                    <div>
                                        <!-- the result to be displayed apply here -->
                                        <a href="whmisquiz2" class="btn btn-primary btn-block">Next Question</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- small modal 2 -->
                    

                    <div class="modal fade" id="smallModal2" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
                        aria-hidden="true">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                
                                        <a>Incorrect!</a>
                                    
                                </div>
                                <div class="modal-body" id="smallBody">
                                    <div>
                                        <!-- the result to be displayed apply here -->
                                        <a href="" class="btn btn-primary btn-block">Back</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                           
                </div>

            </div>
            
        </div>
    </div>
</div>
<script>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });
</script>
@endsection
