<form name="signup" class="bsd-signup-29" action="/join" method="post" id="signup">
                    {{ csrf_field() }}
                    <label>И-мэйл хаяг</label>
                    <input type="email" class="email" id="email" name="email" placeholder="И-мэйл хаяг">
                    <label>Утас</label>
                    <input id="zip" name="phone" class="zip" type="text" placeholder="Утас">
                    <input name="submit-btn" type="submit" value="НЭГДЭХ">

                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
</form>