<head>
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/admin_shop_create.css">
</head>

<body>

    <div class="contact">
        <h1 class="contact-ttl">店舗を登録</h1>
        <form action="{{ route('admin.shop_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="contact-table">
                <tr>
                    <th class="contact-item">
                        {{ __('店舗名') }}
                    </th>
                    <td class="contact-body">
                        <input type="text" class="form-text" name="name" id="name">
                    </td>
                </tr>

                <tr>
                    <th class="contact-item">
                        {{ __('説明') }}
                    </th>
                    <td class="contact-body">
                        <input type="text" class="form-textarea" name="description" id="description"><br>
                    </td>
                </tr>

                <tr>
                    <th class="contact-item">
                        {{ __('エリア') }}
                    </th>
                    <td class="contact-body">
                        <select class="form-select" id="area_id" name="area_id">
                            <option value="">area</option>
                            @foreach($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </select><br>
                    </td>
                </tr>

                <tr>
                    <th class="contact-item">
                        {{ __('ジャンル') }}
                    </th>
                    <td class="contact-body">
                        <select class="form-select" id="genre_id" name="genre_id">
                            <option value="">genre</option>
                            @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select><br>
                    </td>
                </tr>

                <tr>
                    <th class="contact-item">
                        {{ __('image_url') }}
                    </th>
                    <td class="contact-body">
                        <!-- <input type="url" class="form-text" name="image_url" id="image_url"> -->

                        <input type="file" name="image_url" id="image_url" />
                        {{ csrf_field() }}
                    </td>
                </tr>
            </table>
            <button type="submit" class="contact-submit">
                {{ __('登録') }}
            </button>
        </form>
        <a class="return" href="{{ route('admin.index') }}">戻る</a>
    </div>
</body>