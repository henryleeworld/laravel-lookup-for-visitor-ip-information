<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <div class="container">
            @if ($information)
            <div class="card mt-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="caption-top table table-striped table-hover">
                            <caption>
                                {{ __('Get Information by IP Address') }}
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col" class="table-primary">{{ __('IP') }}</th>
                                    <th scope="col">{{ __('ISP') }}</th>
                                    <th scope="col">{{ __('Net Speed') }}</th>
                                    <th scope="col">{{ __('Country Code') }}</th>
                                    <th scope="col">{{ __('Country Name') }}</th>
                                    <th scope="col">{{ __('Region Name') }}</th>
                                    <th scope="col">{{ __('City Name') }}</th>
                                    <th scope="col">{{ __('Latitude') }}</th>
                                    <th scope="col">{{ __('Longitude') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold table-primary text-danger">{{ $information['ip'] }}</td>
                                    <td>{{ __($information['isp']) }}</td>
                                    <td>{{ $information['net_speed'] }}</td>
                                    <td>{{ $information['country_code'] }}</td>
                                    <td>{{ __($information['country_name']) }}</td>
                                    <td>{{ __($information['region_name']) }}</td>
                                    <td>{{ __($information['city_name']) }}</td>
                                    <td>{{ $information['latitude'] }}</td>
                                    <td>{{ $information['longitude'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </body>
</html>
