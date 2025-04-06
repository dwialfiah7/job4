@extends('layouts.app')
 
@section('title', 'Profil Pengguna')

@section('content')
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Profil Pengguna</h1>
                </div>
                <div class="card-body">
                    @if(!empty($profile['profile_picture']))
                        <img src="{{ asset('image/' .$profile['profile_picture']) }}" alt="profile picture" width="150" class="rounded-circle">
                    @endif
                    
                    <h3>{{ $profile['name'] ?? 'Nama tidak tersedia' }}</h3>
                    <p>Email: {{ $profile['email'] ?? 'Email tidak tersedia' }}</p>
                    <p>Bio: {{ $profile['bio'] ?? 'Tidak ada bio yang ditampilkan' }}</p>

                    @if(!empty($profile['skills']) && count($profile['skills']) > 0)
                        <h5>Skills</h5>
                        <ul>
                            @foreach($profile['skills'] as $skills)
                                <li>{{ $skills}}</li>
                             @endforeach
                        </ul>
                    @else
                        <p class="text-muted">Tidak ada skill yang ditampilkan</p>
                    @endif
                </div>
            </div>
@endsection        

