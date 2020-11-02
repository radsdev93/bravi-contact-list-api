<html>
    <head>
        <title>
            Bravi's Contact List Web
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <style>
            table td {
                vertical-align: middle !important;
            }
            .modal-backdrop {
                visibility: hidden !important;
            }
            .modal.in {
                background-color: rgba(0,0,0,0.5);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <br/>
            <h3 align="center">
                Bravi's Contact List Web
            </h3>
            <br/>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="panel-title">
                                Lista de Contatos
                            </h3>
                        </div>
                        <div align="right" class="col-md-6">
                            <button class="btn btn-outline-info btn-sm" id="add_button" type="button">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <span id="message_area">
                    </span>
                    <table class="table table-bordered table-striped table-hover table-sm text-center" id="records_table">
                        <thead>
                            <tr>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Sobrenome
                                </th>
                                <th>
                                    Nascimento
                                </th>
                                <th>
                                    Contatos
                                </th>
                                <th>
                                    Registrado em
                                </th>
                                <th>
                                    Última alteração
                                </th>
                                <th>
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody id="records_table">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
<div class="modal fade" id="contactDetailsModal">
    <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Detalhes do Contato
                    </h5>
                    <button class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 id="contact_details_title"></h6>
                        </div>
                        <div align="right" class="col-md-6">
                            <button class="btn btn-outline-info btn-sm" id="add_contact" type="button">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                    <span id="details_message_area"></span>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#phones">Telefones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#emails">Emails</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#urls">Links</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="phones" class="container tab-pane active">
                            <table class="table table-bordered table-striped table-hover table-sm text-center" id="phones_table">
                                <thead>
                                    <tr>
                                        <th>País</th>
                                        <th>Número</th>
                                        <th>Rótulo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody id="phones_table">
                                </tbody>
                            </table>
                        </div>
                        <div id="emails" class="container tab-pane">
                            <table class="table table-bordered table-striped table-hover table-sm text-center" id="emails_table">
                                <thead>
                                    <tr>
                                        <th>Endereço</th>
                                        <th>Rótulo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody id="emails_table">
                                </tbody>
                            </table>
                        </div>
                        <div id="urls" class="container tab-pane">
                            <table class="table table-bordered table-striped table-hover table-sm text-center" id="urls_table">
                                <thead>
                                    <tr>
                                        <th>Endereço</th>
                                        <th>Rótulo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody id="urls_table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" data-dismiss="modal" type="button">
                        Fechar
                    </button>
                </div>
            </div>
    </div>
</div>
<div class="modal fade" id="contactFormModal">
    <div class="modal-dialog">
        <form id="contact_form" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Cadastrar Contato
                    </h4>
                    <button class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <label for="firstname">
                        Nome
                    </label>
                    <input class="form-control" id="first_name" name="firstname" type="text"/>
                    <span class="text-danger" id="first_name_error">
                    </span>
                    <br/>
                    <label for="lastname">
                        Sobrenome
                    </label>
                    <input class="form-control" id="last_name" name="lastname" type="text"/>
                    <span class="text-danger" id="last_name_error">
                    </span>
                    <br/>
                    <label for="birthdate">
                        Data de Nascimento
                    </label>
                    <input class="form-control" id="birth_date" name="birthdate" type="date"/>
                    <span class="text-danger" id="birth_date_error">
                    </span>
                    <br/>
                </div>
                <div class="modal-footer">
                    <input id="contact_id" name="contact_id" type="hidden"/>
                    <input id="data_action" name="data_action" type="hidden"/>
                    <input type="submit" class="btn btn-outline-success" id="action" value="Continuar" />
                    <button class="btn btn-outline-secondary" data-dismiss="modal" type="button">
                        Cancelar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="contactFormModal2">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Cadastrar Contato
                    </h5>
                    <button class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Telefones</h6>
                    <span id="message_area2"></span>
                    <form id="phone_form" method="post">
                        <div class="row mb-3">
                            <div class="col-6">
                                <select class="form-control form-control-sm" id="phone_country" name="phone_country">
                                    <option value="">País</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="text" id="phone_number" name="phone_number" class="form-control form-control-sm" placeholder="Telefone" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-9">
                                <input type="text" id="phone_label" name="phone_label" class="form-control form-control-sm" placeholder="Rótulo (Ex: Escritório)" />
                            </div>
                            <div class="col-3">
                                <input id="phone_id" value="" name="phone_id" type="hidden"/>
                                <input id="phone_data_action" value="Insert" name="phone_data_action" type="hidden"/>
                                <input type="submit" class="btn btn-sm btn-outline-primary" id="submit-phone" value="Registrar" />
                            </div>
                        </div>
                    </form>
                    <hr/>
                    <h6>Emails</h6>
                    <span id="message_area3"></span>
                    <form id="email_form" method="post">
                        <div class="row mb-3">
                            <div class="col-12">
                                <input type="text" id="email_address" name="email_address" class="form-control form-control-sm" placeholder="Email" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-9">
                                <input type="text" id="email_label" name="email_label" class="form-control form-control-sm" placeholder="Rótulo (Ex: Agendamentos)" />
                            </div>
                            <div class="col-3">
                                <input id="email_id" value="" name="email_id" type="hidden"/>
                                <input id="email_data_action" value="Insert" name="email_data_action" type="hidden"/>
                                <input type="submit" class="btn btn-sm btn-outline-primary" id="submit-email" value="Registrar" />
                            </div>
                        </div>
                    </form>    
                    <hr/>
                    <h6>Links</h6>
                    <span id="message_area4"></span>
                    <form id="url_form" method="post">
                        <div class="row mb-3">
                            <div class="col-12">
                                <input id="data_action" name="data_action" type="hidden"/>
                                <input type="text" id="url_address" name="url_address" class="form-control form-control-sm" placeholder="Link" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-9">
                                <input type="text" id="url_label" name="url_label" class="form-control form-control-sm" placeholder="Rótulo (Ex: LinkedIn)" />
                            </div>
                            <div class="col-3">
                                <input id="url_id" value="" name="url_id" type="hidden"/>
                                <input id="url_data_action" value="Insert" name="url_data_action" type="hidden"/>
                                <input type="submit" class="btn btn-sm btn-outline-primary" id="submit-url" value="Registrar" />
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" id="modal2btn" data-dismiss="modal" type="button">
                        Concluir
                    </button>
                </div>
            </div>
    </div>
</div>
<script language="javascript" type="text/javascript">
    $(document).ready(function() {

        var current_contact = '';

        //HANDLE MODAL OVER MODAL
        $(document).on('hidden.bs.modal', function (event) {
            if ($('.modal:visible').length) {
                $('body').addClass('modal-open');
            }
        });
        
        //POPULATE TABLE
        function fetch_data() {
            $.ajax({
                url: "<?php echo base_url(); ?>/contacts",
                method: "GET",
                success: function(response) {
                    var trHTML = '';
                    $.each(response.contacts, function(i, o) {
                        trHTML += '<tr><td>' + o.contact_firstname + '</td><td>' + o.contact_lastname + '</td><td>' + o.contact_birthdate + '</td><td>' + '<button class="btn btn-outline-secondary btn-sm details" id="details-' + o.contact_id + '">Visualizar Contatos</button>' + '</td><td>' + o.contact_register_date + '</td><td>' + o.contact_last_modified + '</td><td>' + '<button class="btn btn-sm btn-outline-warning edit" id="edit-' + o.contact_id + '">Editar</button> <button class="btn btn-sm btn-outline-danger delete" id="delete-' + o.contact_id + '">Apagar</button>' + '</td></tr>';
                    });
                    $('tbody#records_table').append(trHTML);
                }
            });
        }
        fetch_data();

        //SHOW ADD CONTACT MODAL
        $('#add_button').click(function() {
            $('#contact_form')[0].reset();
            $('.modal-title').text("Cadastrar Contato");
            $('#action').val('Continuar');
            $('#data_action').val("Insert");
            $('#contactFormModal').modal('show');
        });

        //SHOW ADD PHONE, EMAIL OR URL MODAL
        $('#add_contact').click(function() {
            $('#contactDetailsModal').modal('hide');
            $('#contactFormModal2').modal('show');
        });

        //SHOW EDIT CONTACT MODAL
        $('#records_table').on('click', '.edit', function() {
            var contact_id = $(this).attr('id').substring(5);
            $.ajax({
                url: "<?php echo base_url(); ?>/contacts/get/" + contact_id,
                method: "POST",
                success: function(response) {
                    $('#contactFormModal').modal('show');
                    $('#first_name').val(response.contact_firstname);
                    $('#last_name').val(response.contact_lastname);
                    $('#birth_date').val(response.contact_birthdate);
                    $('#contact_id').val(contact_id);
                    $('#data_action').val('Edit');
                    $('#action').val('Finalizar');
                    $('.modal-title').text('Editar Contato');
                }
            });
        });

        //SHOW EDIT PHONE MODAL
        $('#phones_table').on('click', '.edit', function() {
            $('#phone_form')[0].reset();
            $('#email_form')[0].reset();
            $('#url_form')[0].reset();
            var phone_id = $(this).attr('id').substring(5);
            $.ajax({
                url: "<?php echo base_url(); ?>/phones/get/" + phone_id,
                method: "POST",
                success: function(response) {
                    $('#contactDetailsModal').modal('hide');
                    $('#contactFormModal2').modal('show');
                    $('#phone_number').val(response.phone_number);
                    $('#phone_country').val(response.phone_country);
                    $('#phone_label').val(response.phone_label);
                    $('#phone_id').val(response.phone_id);
                    $('#phone_data_action').val("Edit");
                    $('.modal-title').text('Editar Contato');
                }
            });
        });
        //SHOW EDIT EMAIL MODAL
        $('#emails_table').on('click', '.edit', function() {
            $('#phone_form')[0].reset();
            $('#email_form')[0].reset();
            $('#url_form')[0].reset();
            var email_id = $(this).attr('id').substring(5);
            $.ajax({
                url: "<?php echo base_url(); ?>/emails/get/" + email_id,
                method: "POST",
                success: function(response) {
                    $('#contactDetailsModal').modal('hide');
                    $('#contactFormModal2').modal('show');
                    $('#email_address').val(response.email_address);
                    $('#email_label').val(response.email_label);
                    $('#email_id').val(response.email_id);
                    $('#email_data_action').val("Edit");
                    $('.modal-title').text('Editar Contato');
                }
            });
        });
        //SHOW EDIT URL MODAL
        $('#urls_table').on('click', '.edit', function() {
            $('#phone_form')[0].reset();
            $('#email_form')[0].reset();
            $('#url_form')[0].reset();
            var url_id = $(this).attr('id').substring(5);
            $.ajax({
                url: "<?php echo base_url(); ?>/urls/get/" + url_id,
                method: "POST",
                success: function(response) {
                    $('#contactDetailsModal').modal('hide');
                    $('#contactFormModal2').modal('show');
                    $('#url_address').val(response.url_address);
                    $('#url_label').val(response.url_label);
                    $('#url_id').val(response.url_id);
                    $('#url_data_action').val("Edit");
                    $('.modal-title').text('Editar Contato');
                }
            });
        });

        //HANDLE CONTACT FORM SUBMISSION
        $("#contact_form").submit(function(e) {
            e.preventDefault();
            var form = {
                'firstname': $('input#first_name').val(),
                'lastname': $('input#last_name').val(),
                'birthdate': $('input#birth_date').val()
            };
            var action = $('#data_action').val();
            if (action == 'Insert') {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/contacts/create",
                    headers: {
                        'firstname': $('input#first_name').val(),
                        'lastname': $('input#last_name').val(),
                        'birthdate': $('input#birth_date').val()
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 201) {
                            current_contact = response["id"];
                            $('#contact_form')[0].reset();
                            $('#contactFormModal').modal('hide');
                            $('tbody#records_table').empty();
                            fetch_data();
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Contato cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            $('#contactFormModal2').modal('show');
                        } else {
                            $('#message_area').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Contato não cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                });
            } else if (action == 'Edit') {
                current_contact = $('input#contact_id').val();
                var form = {
                    'firstname': $('input#first_name').val(),
                    'lastname': $('input#last_name').val(),
                    'birthdate': $('input#birth_date').val(),
                    'contact_id': $('input#contact_id').val()
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/contacts/update",
                    headers: {
                        'firstname': $('input#first_name').val(),
                        'lastname': $('input#last_name').val(),
                        'birthdate': $('input#birth_date').val(),
                        'contact_id': $('input#contact_id').val()
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 200) {
                            $('#contact_form')[0].reset();
                            $('#contactFormModal').modal('hide');
                            $('tbody#records_table').empty();
                            fetch_data();
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Contato atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#message_area').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Contato não atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                });
            } 
        });

        //HANDLE PHONES, EMAILS AND LINKS SUBMISSIONS
        $("#phone_form").submit(function(e) {
            e.preventDefault();
            var form = {
                    'label': $('input#phone_label').val(),
                    'number': $('input#phone_number').val(),
                    'country_id': $('select#phone_country').val(),
                    'contact_id': current_contact
            };
            var action = $('#phone_data_action').val();
            if (action == 'Insert') {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/phones/create",
                    headers: {
                        'label': $('input#phone_label').val(),
                        'number': $('input#phone_number').val(),
                        'country_id': $('select#phone_country').val(),
                        'contact_id': current_contact,
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 201) {
                            $('tbody#phones_table').empty();
                            $('#phone_form')[0].reset();
                            $('#message_area2').html('<div class="alert alert-success alert-dismissible fade show">Telefone cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#message_area2').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Telefone não cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }   
                });
            } else if (action == 'Edit') {
                var form = {
                    'phone_label': $('input#phone_label').val(),
                    'phone_number': $('input#phone_number').val(),
                    'phone_country': $('select#phone_country').val(),
                    'phone_contact': current_contact,
                    'phone_id': $('input#phone_id').val()
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/phones/update",
                    headers: {
                        'label': $('input#phone_label').val(),
                        'number': $('input#phone_number').val(),
                        'country_id': $('select#phone_country').val(),
                        'contact_id': current_contact,
                        'phone_id': $('input#phone_id').val()
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 200) {
                            $('tbody#phones_table').empty();
                            $('#phone_form')[0].reset();
                            $('#message_area2').html('<div class="alert alert-success alert-dismissible fade show">Telefone atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#message_area2').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Telefone não atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }   
                });
            }
        });
        $("#email_form").submit(function(e) {
            e.preventDefault();
            var form = {
                    'label': $('input#email_label').val(),
                    'address': $('input#email_address').val(),
                    'contact_id': current_contact
            };
            var action = $('#email_data_action').val();
            if (action == 'Insert') {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/emails/create",
                    headers: {
                        'label': $('input#email_label').val(),
                        'address': $('input#email_address').val(),
                        'contact_id': current_contact
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 201) {
                            $('tbody#emails_table').empty();
                            $('#email_form')[0].reset();
                            $('#message_area3').html('<div class="alert alert-success alert-dismissible fade show">Email cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#message_area3').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Email não cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                });
            } else if (action == 'Edit') {
                var form = {
                    'label': $('input#email_label').val(),
                    'address': $('input#email_address').val(),
                    'contact_id': current_contact,
                    'email_id': $('input#email_id').val()
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/emails/update",
                    headers: {
                        'label': $('input#email_label').val(),
                        'address': $('input#email_address').val(),
                        'contact_id': current_contact,
                        'email_id': $('input#email_id').val()
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 200) {
                            $('tbody#emails_table').empty();
                            $('#email_form')[0].reset();
                            $('#message_area3').html('<div class="alert alert-success alert-dismissible fade show">Email atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#message_area3').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Email não atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                });
            }
        });
        $("#url_form").submit(function(e) {
            e.preventDefault();
            var form = {
                    'label': $('input#url_label').val(),
                    'address': $('input#url_address').val(),
                    'contact_id': current_contact
            };
            var action = $('#url_data_action').val();
            if (action == 'Insert') {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/urls/create",
                    headers: {
                        'label': $('input#url_label').val(),
                        'address': $('input#url_address').val(),
                        'contact_id': current_contact,
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 201) {
                            $('tbody#urls_table').empty();
                            $('#url_form')[0].reset();
                            $('#message_area4').html('<div class="alert alert-success alert-dismissible fade show">Link cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#message_area4').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Link não cadastrado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                });
            } else if (action == 'Edit') {
                var form = {
                    'label': $('input#url_label').val(),
                    'address': $('input#url_address').val(),
                    'contact_id': current_contact,
                    'url_id': $('input#url_id').val()
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>/urls/update",
                    headers: {
                        'label': $('input#url_label').val(),
                        'address': $('input#url_address').val(),
                        'contact_id': current_contact,
                        'url_id': $('input#url_id').val()
                    },
                    data: form,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 200) {
                            $('tbody#urls_table').empty();
                            $('#url_form')[0].reset();
                            $('#message_area4').html('<div class="alert alert-success alert-dismissible fade show">Link atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#message_area4').html('<div class="alert alert-danger alert-dismissible fade show">Erro! Link não atualizado!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                });
            }
        });

        //POPULATE COUNTRIES LIST
        function getCountries(callback) {
            httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState === 4) {
                if (httpRequest.status === 200) {
                    callback(httpRequest.responseText);
                }
            }
        };
            httpRequest.open('GET', "<?php echo base_url(); ?>/countries");
            httpRequest.send();
        }
        getCountries(function (result) {
            var json_result = JSON.parse(result);
            var countries = json_result["countries"];
            for (let c of countries) {
                if (c.country_name == "Brasil") {
                    $("#phone_country").append('<option selected value="' + c.country_id + '">' + c.country_name + '</option>');
                } else {
                   $("#phone_country").append('<option value="' + c.country_id + '">' + c.country_name + '</option>');
                }
            }   
        });

        //DELETE CONTACT
        $('#records_table').on('click', '.delete', function() {
            var contact_id = $(this).attr('id').substring(7);
            if (confirm("Tem certeza de que deseja remover este contato?")) {
                $.ajax({
                    url: "<?php echo base_url(); ?>/contacts/delete/" + contact_id,
                    method: "POST",
                    success: function(response) {
                        if (response.status == 200) {
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Contato removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            $('tbody#records_table').empty();
                            fetch_data();
                        } else {
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Erro! Contato não removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                })
            }
        });

        //DELETE PHONE
        $('#phones_table').on('click', '.delete', function() {
            var phone_id = $(this).attr('id').substring(7);
            if (confirm("Tem certeza de que deseja remover este telefone?")) {
                $.ajax({
                    url: "<?php echo base_url(); ?>/phones/delete/" + phone_id,
                    method: "POST",
                    success: function(response) {
                        if (response.status == 200) {
                            $('#contactDetailsModal').modal('hide');
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Telefone removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#contactDetailsModal').modal('hide');
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Erro! Telefone não removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                })
            }
        });
        //DELETE EMAIL
        $('#emails_table').on('click', '.delete', function() {
            var email_id = $(this).attr('id').substring(7);
            if (confirm("Tem certeza de que deseja remover este email?")) {
                $.ajax({
                    url: "<?php echo base_url(); ?>/emails/delete/" + email_id,
                    method: "POST",
                    success: function(response) {
                        if (response.status == 200) {
                            $('#contactDetailsModal').modal('hide');
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Email removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#contactDetailsModal').modal('hide');
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Erro! Email não removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                })
            }
        });
        //DELETE URL
        $('#urls_table').on('click', '.delete', function() {
            var url_id = $(this).attr('id').substring(7);
            if (confirm("Tem certeza de que deseja remover este link?")) {
                $.ajax({
                    url: "<?php echo base_url(); ?>/urls/delete/" + url_id,
                    method: "POST",
                    success: function(response) {
                        if (response.status == 200) {
                            $('#contactDetailsModal').modal('hide');
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Link removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#contactDetailsModal').modal('hide');
                            $('#message_area').html('<div class="alert alert-success alert-dismissible fade show">Erro! Link não removido!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        }
                    }
                })
            }
        });

        //SHOW CONTACT DETAILS
        $('#records_table').on('click', '.details', function() {
            var contact_id = $(this).attr('id').substring(8);
            fetch_contact_info(contact_id);
            fetch_phones_data(contact_id);
            fetch_emails_data(contact_id);
            fetch_urls_data(contact_id);
            $('#contactDetailsModal').modal('show');
            replaceCountries();
        });

    function fetch_contact_info(contact_id) {
        function getContact(callback) {
                httpContactRequest = new XMLHttpRequest();
                httpContactRequest.onreadystatechange = function () {
                    if (httpContactRequest.readyState === 4) {
                        if (httpContactRequest.status === 200) {
                            callback(httpContactRequest.responseText);
                        }
                    }
                };
                httpContactRequest.open('POST', "<?php echo base_url(); ?>/contacts/get/" + contact_id);
                httpContactRequest.send();
            }
            getContact(function (result) {
                var contact = JSON.parse(result);
                $('#contact_details_title').html(contact.contact_firstname + ' ' + contact.contact_lastname);
            });
    }

        function fetch_phones_data(contact_id) {    
            current_contact = contact_id;
            $('tbody#phones_table').empty();
            function getPhones(callback) {
                httpPhonesRequest = new XMLHttpRequest();
                httpPhonesRequest.onreadystatechange = function () {
                    if (httpPhonesRequest.readyState === 4) {
                        if (httpPhonesRequest.status === 200) {
                            callback(httpPhonesRequest.responseText);
                        }
                    }
                };
                httpPhonesRequest.open('POST', "<?php echo base_url(); ?>/phones/getByContact/" + contact_id);
                httpPhonesRequest.send();
            }
            getPhones(function (result) {
                var json_result = JSON.parse(result);
                var phones = json_result["phones"];
                var trHTML = '';
                $.each(phones, function(i, o) {
                    trHTML = '<tr><td class="country-' + o.phone_country + '">' + '</td><td>' +  o.phone_number + '</td><td>' + o.phone_label + '</td><td>' + '<button class="btn btn-sm btn-outline-warning edit" id="edit-' + o.phone_id + '">Editar</button> <button class="btn btn-sm btn-outline-danger delete" id="delete-' + o.phone_id + '">Apagar</button>' + '</td></tr>';
                    $('tbody#phones_table').append(trHTML);
                });
            });
        }

        function replaceCountries() {            
            var countries = '';
            $.ajax({
                url: "<?php echo base_url(); ?>/countries",
                method: "GET",
                success: function(e) {
                    e.countries.forEach(function (o,i) {                                
                        $('.country-'+o.country_id).text(o.country_name + ' (+' + o.country_code + ')'); 
                    });
                }
            });
        }

        function fetch_emails_data(contact_id) {
            $('tbody#emails_table').empty();
            function getEmails(callback) {
                httpEmailsRequest = new XMLHttpRequest();
                httpEmailsRequest.onreadystatechange = function () {
                    if (httpEmailsRequest.readyState === 4) {
                        if (httpEmailsRequest.status === 200) {
                            callback(httpEmailsRequest.responseText);
                        }
                    }
                };
                httpEmailsRequest.open('POST', "<?php echo base_url(); ?>/emails/getByContact/" + contact_id);
                httpEmailsRequest.send();
            }
            getEmails(function (result) {
                var json_result = JSON.parse(result);
                var emails = json_result["emails"];
                var trHTML = '';
                $.each(emails, function(i, o) {
                    trHTML = '<tr><td>' + o.email_address + '</td><td>' + o.email_label +  '</td><td>' + '<button class="btn btn-sm btn-outline-warning edit" id="edit-' + o.email_id + '">Editar</button> <button class="btn btn-sm btn-outline-danger delete" id="delete-' + o.email_id + '">Apagar</button>' + '</td></tr>';
                        $('tbody#emails_table').append(trHTML);
                });
            });
        }

        function fetch_urls_data(contact_id) {
            $('tbody#urls_table').empty();
            function getUrls(callback) {
                httpUrlsRequest = new XMLHttpRequest();
                httpUrlsRequest.onreadystatechange = function () {
                    if (httpUrlsRequest.readyState === 4) {
                        if (httpUrlsRequest.status === 200) {
                            callback(httpUrlsRequest.responseText);
                        }
                    }
                };
                httpUrlsRequest.open('POST', "<?php echo base_url(); ?>/urls/getByContact/" + contact_id);
                httpUrlsRequest.send();
            }
            getUrls(function (result) {
                var json_result = JSON.parse(result);
                var urls = json_result["urls"];
                var trHTML = '';
                $.each(urls, function(i, o) {
                    trHTML = '<tr><td>' + o.url_address + '</td><td>' + o.url_label +  '</td><td>' + '<button class="btn btn-sm btn-outline-warning edit" id="edit-' + o.url_id + '">Editar</button> <button class="btn btn-sm btn-outline-danger delete" id="delete-' + o.url_id + '">Apagar</button>' + '</td></tr>';
                        $('tbody#urls_table').append(trHTML);
                });
            });
        }

    });
</script>
