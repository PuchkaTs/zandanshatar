<form name="signup" class="bsd-signup-29" action="/contact" method="post" id="signup">
                    {{ csrf_field() }}
                    <div>
                    <label>Асуулт</label>
                    <textarea type='text' class="ask_textarea"  name="body" rows="4" placeholder="Асуулт">
                    </textarea>
                    </div>
                    <label>И-мэйл хаяг</label>
                    <input type="email" class="email" id="email" name="email" placeholder="И-мэйл хаяг">
                    <label>Утас</label>
                    <input id="zip" name="phone" class="zip" type="text" placeholder="Утас">
                    <input name="submit-btn" type="submit" value="Асуух">

                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
</form>