<html>
    <head>
        <style>
            body {
                padding:50px;
                margin-left: 300px;
               
            }
            thead {
                background: #bbb;
            }
            thead tr th {
                height: 50px;
                min-width: 150px;
            }
            #links {
                background: #fff;
            }
            #links th a {
                padding: 10px 25px;
                background: #4455FF;
                width: 150px;
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="u-mb-4">
            {!! \DNS2D::getBarcodeHTML("Nyan Thar Myint", 'QRCODE') !!}
          </div>
        <img src="{{ url('storage/items/11.jpg')}}" alt="">
        <table>
            <thead>
                <tr id="links">
                    <th>@sortablelink('name')</th>
                    <th>@sortablelink('color')</th>
                    <th>@sortablelink('weight')</th>
                </tr>
                <tr>
                    <th>Item Name</th>
                    <th>Color</th>
                    <th>Weight</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->color}}</td>
                    <td>{{$item->weight}}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        {!! $items->appends(\Request::except('page'))->render() !!}
    </body>
</html>