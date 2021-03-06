@extends('layouts.app')

@section('content')

<div id="transcroller-body" class="aos-all">
    <div class="aos-item" data-aos="fade-up">
      <div class="aos-item__inner"><h3>1</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-down">
      <div class="aos-item__inner"><h3>2</h3></div>
    </div>
    <div class="aos-item" data-aos="zoom-out-down">
      <div class="aos-item__inner"><h3>3</h3></div>
    </div>
    <div class="aos-item" data-aos="flip-down">
      <div class="aos-item__inner"><h3>4</h3></div>
    </div>
    <div class="aos-item" data-aos="flip-up">
      <div class="aos-item__inner"><h3>5</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-down">
      <div class="aos-item__inner"><h3>6</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>7</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-down">
      <div class="aos-item__inner"><h3>8</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>9</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-down">
      <div class="aos-item__inner"><h3>10</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-up">
      <div class="aos-item__inner"><h3>11</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-down">
      <div class="aos-item__inner"><h3>12</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>13</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-up">
      <div class="aos-item__inner"><h3>14</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>15</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-up">
      <div class="aos-item__inner"><h3>16</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-down">
      <div class="aos-item__inner"><h3>17</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-up">
      <div class="aos-item__inner"><h3>18</h3></div>
    </div>
    <div class="aos-item" data-aos="zoom-out">
      <div class="aos-item__inner"><h3>19</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-up">
      <div class="aos-item__inner"><h3>20</h3></div>
    </div>
    <div class="aos-item" data-aos="zoom-out">
      <div class="aos-item__inner"><h3>21</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>22</h3></div>
    </div>
    <div class="aos-item" data-aos="zoom-out-up">
      <div class="aos-item__inner"><h3>23</h3></div>
    </div>
    <div class="aos-item" data-aos="zoom-out-down">
      <div class="aos-item__inner"><h3>24</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>25</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>26</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>27</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>28</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>29</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>30</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>31</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>32</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>33</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>34</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>35</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>36</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>37</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>38</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>39</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>40</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>41</h3></div>
    </div>
    <div class="aos-item" data-aos="fade-in">
      <div class="aos-item__inner"><h3>42</h3></div>
    </div>
  </div>

    @push('prepend-style')
        <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
        <link rel="stylesheet" href="{{url('frontend/css/main.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/dist/aos.css')}}" />
    @endpush

    @push('addon-script')
        <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
        <script>
            $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
            });
        </script>
    @endpush

@endsection
