@extends('layouts.app')

@section('content')

<section id="vision">
    <div
      class="flex items-center px-10 md:px-20 bg-dark-blue w-full h-16 md:h-20 text-white"
    >
      <h1 class="text-sm md:text-3xl uppercase">Concejo Municipal</h1>

      
      
    </div>
    <div class="bg-[#E9E9E9]">
      <div
        class="flex flex-col md:flex-row gap-4 px-3 md:px-20 py-2 md:py-10"
      >
        <div class="flex-1 bg-white shadow-md rounded-2xl h-fit p-4 md:p-6">
          <div>
<!--             <img
              class="w-full mb-5 max-h-[40rem]"
              src="https://picsum.photos/1200/600"
            /> -->
            <div class="flex flex-col gap-4">


              @foreach($city_councils as $city_council)   
              <table width="800" border="0" class="cardprofile" style="margin-bottom: 10px;">
                  <tbody class="tcuerpo">
                      <tr>
                          <td width="370" height="250">
                              <img class="sombra" src="{{ $city_council->photo }}" style="border-radius: 5px;">

                          </td>
                          
                          <td style="padding-left: 20px;">
                              <table border="0">
                                  <tbody>
                                      <tr>
                                          <td  class="text-titulo pull-left" ><b style="color:#2e8ece"> {{ $city_council->position }}</b></td>
                                      </tr>
                                      <tr>
                                         <td class="text-titulo pull-left">{{ $city_council->name }}</td>
                                         
                                      </tr>
                                      <tr>
                                          <td class="text-titulo pull-left">{{ $city_council->email }}</td>
                                          
                                      </tr>
                                  </tbody>
                              </table>    
                          </td>
                      </tr>
                  </tbody>
              </table>
              
              <hr style="color: #0056b2;" /> <!-- separacion horizontal entre filas -->
              @endforeach
            




            </div>
          </div>
        </div>
        

  @include('shared.information')
@endsection