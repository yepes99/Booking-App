@extends('layouts.app') 

@section('title', 'Página de Inicio') <!-- Título de la página -->

@section('content')

<!-- Hero Section -->
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container px-4">
        <div class="row align-items-center">
            <!-- Hero content (izquierda) -->
            <div class="col-lg-6 d-flex justify-content-start">
                <div class="hero-content text-start "> 
                    <h1 class="mt-5">
                        Travel, <br>
                        enjoy a
                        <span class="accent-text">new life</span>
                    </h1>
                </div>
            </div>
           
        </div>


        <!-- Formulario de búsqueda -->
        <div class="row stats-row gy-2 mt-5">
            <form action="#" class="search-property-1">
                <div class="row no-gutters">
                    <div class="col-md d-flex">
                        <div class="form-group p-4 border-0">
                            <label for="destination">Destination</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-search"></span></div>
                                <input type="text" class="form-control" placeholder="Search place" name="destination"
                                    id="destination">
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex">
                        <div class="form-group p-4">
                            <label for="checkin_date">Check-in date</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <input type="text" class="form-control checkin_date" placeholder="Check In Date"
                                    name="checkin_date" id="checkin_date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex">
                        <div class="form-group p-4">
                            <label for="checkout_date">Check-out date</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <input type="text" class="form-control checkout_date" placeholder="Check Out Date"
                                    name="checkout_date" id="checkout_date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex">
                        <div class="form-group p-4">
                            <label for="price_limit">Price Limit</label>
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                    <select name="price_limit" id="price_limit" class="form-control">
                                        <option value="$100">$100</option>
                                        <option value="$10,000">$10,000</option>
                                        <option value="$50,000">$50,000</option>
                                        <option value="$100,000">$100,000</option>
                                        <option value="$200,000">$200,000</option>
                                        <option value="$300,000">$300,000</option>
                                        <option value="$400,000">$400,000</option>
                                        <option value="$500,000">$500,000</option>
                                        <option value="$600,000">$600,000</option>
                                        <option value="$700,000">$700,000</option>
                                        <option value="$800,000">$800,000</option>
                                        <option value="$900,000">$900,000</option>
                                        <option value="$1,000,000">$1,000,000</option>
                                        <option value="$2,000,000">$2,000,000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex">
                        <div class="form-group p-4">
                            <label for="checkout_date">Todo listo?</label>
                            <div class="form-field">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <input type="submit" class="form-control submit_button" placeholder="Enviar" 
                                name="submit_button" id="submit_button">
                            </div>
                        </div>
                    </div>
                </div>

                   
            </div>


                </div>
            </form>
        </div>
    </div>

</section>
<br><br>



@endsection