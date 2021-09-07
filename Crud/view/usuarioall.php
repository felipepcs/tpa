<! DOCTYPE html >
< html  lang = " en " >

< cabeça >
    < title > Exemplo de bootstrap </ title >
    < meta  charset = " utf-8 " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1 " >
    < link  rel = " stylesheet " href = " https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css " >
    < script  src = " https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js " > </ script >
    < script  src = " https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js " > </ script >
    < script  src = " https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " > </ script >
</ head >

< corpo >

    < div  class = " container " >
        < h2 > Usuários </ h2 >
        < p  class = " pb-2 " > Listagem de usuários
        
        < span  style = " float: right " >
            < A  href = " ? Acao = criar " class =" btn btn-primária " > Cadastrar Novo Usuário </ a >
        </ span >
    
        </ p >


        < table  class = " table table-stripes table-bordered " >
            < thead >
                < tr >
                    < th > # </ th >
                    < th > Email </ th >
                    < th > Nome </ th >
                    < th > Ações </ th >
                </ tr >
            </ thead >
            < tbody >

                <? php  $ i = 1 ; foreach ( $ usuarios  AS  $ usuario ) { ?>
                    < tr >
                        < td > <? = $ i ++ ?> </ td >
                        < td > <? = $ usuario -> email ?> </ td >
                        < td > <? = $ usuario -> nome ?> </ td >
                        < td >
                            < A  href = " acao = update & id =? <=? $ Usuario -> id ?> " Class =" btn btn-aviso " > Editar </ a >

                            <! - a href = "? acao = delete & id = <? = $ usuario-> id?>" class = "btn btn-danger"> Excluir </a-->

                            <! - Botão para abrir o modal ->
                            < botão 
                                type = " botão "
                                class = " btn btn-danger btn-excluir "
                                data-toggle = " modal "
                                data-target = " #myModal "
                                data-id = " <? = $ usuario -> id ?> "
                            >
                            Excluir
                            </ botão >

                    </ tr >
                <? php } ?>

            </ tbody >
        </ mesa >
    </ div >

</ body >

</ html >

<! - O modal ->
< div  class = " modal " id = " meuModal " >
  < div  class = " modal-dialog " >
    < div  class = " modal-content " >

      <! - Cabeçalho modal ->
      < div  class = " modal-header " >
        < h4  class = " modal-title " > Exclusão </ h4 >
        < button  type = " button " class = " close " data-despedir = " modal " > & times; </ botão >
      </ div >

      <! - Corpo modal ->
      < div  class = " modal-body " >
        Tem certeza que deseja excluir o registro?
      </ div >

      <! - Rodapé modal ->
      < div  class = " modal-footer " >
        < A  id = " modal-btn-excluir " href ="" class = " btn btn-primária " > Sim </ a >
        < button  type = " button " class = " btn btn-danger " data-despedir = " modal " > Não </ button >
      </ div >

    </ div >
  </ div >
</ div >

< script >
$ ( '#myModal' ) . on ( 'mostrado.bs.modal' ,  função ( evento )  {
     botão  var =  $ ( event . relatedTarget ) ;
    var  id  =  botão . dados ( 'id' ) ;
    $ ( "# modal-btn-excluir" ) . attr ( 'href' ,  './?acao=delete&id=' + id ) ;
} ) ;
</ script >
