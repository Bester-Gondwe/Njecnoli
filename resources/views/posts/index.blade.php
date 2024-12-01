<x-layouts>

    @auth
    <h1>Logged in</h1>    
    @endauth

    @guest
        <h1>Guests</h1>

        {{-- RESERVED  --}}
        {{--  <div class="dropdown">
            <button type="button" class="round-btn">
                <img src="c:\Users\BESTER\Pictures\Camera Roll\test.jpg" alt="">
                {{-- dropdown menu 
                
                <div class="menu">
                <p class="username">Username</p>
                <a class="dashboard" href="">Dashboard</a>

            </div>
            </button>

            

        </div> --}}


        <input type="checkbox" name="checkbox">
        <input type="comboBox" name="ComboBox">
        <input type="dropdown" name="dropdown list">
        
        <input type="range" name="range" id="range">
        <input type="hidden" name="">
        <input type="file" name="file" id="file">

            
       
    @endguest

    

</x-layouts>
