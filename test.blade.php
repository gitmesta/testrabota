
  
@section('test')
    <!-- тестовый блок -->
    <span>Новая запись</span>
    <form method="post" action="/test/newZapis">
        @csrf
        <input type="text" name="title" placeholder="Заголовок">
        <input type="text" name="description" placeholder="Описание">
        <input type="number" name="status" placeholder="Статус">
        <input type="hidden" name="status" placeholder="Статус">
        <input type="hidden" name="rejimPHP">
        <button>Отправить</button>
    </form>
    </br>
    <span>Обновление записи</span>
    <form method="post" action="/test/obnovitZapis">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="number" name="ident" placeholder="Идентификатор">
        <input type="text" name="title" placeholder="Заголовок">
        <input type="text" name="description" placeholder="Описание">
        <input type="number" name="status" placeholder="Статус">
        <button>Обновить</button>
    </form>   
    </br>
    <span>Удаление записи</span>
    <form method="get" action="/test/udalitZapis">
        @csrf
        <input type="number" name="ident" placeholder="Идентификатор">
        <button>Удалить</button>
    </form>   
    </br>
    </br>
    <span>Выборка всех записей</span>
    <form method="get" action="/test/vseZapisi">
        @csrf
        <button>Все записи</button>
    </form>   
    </br>
   </br>
    <span>Выборка всех записей</span>
    <form method="get" action="/test/odnaZapis">
        @csrf
        <input type="number" name="ident" placeholder="Идентификатор">
        <button>Выборка одной записи по id</button>
    </form>   
    </br>    

@endsection   