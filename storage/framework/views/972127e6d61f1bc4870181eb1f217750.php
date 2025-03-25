<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação de Acesso ao POP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
    <style>
        /* Estilo da tabela no editor */
        .ck-editor__editable .table {
            width: 800px; /* Largura fixa */
            table-layout: fixed; /* Manter a tabela com largura fixa */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="min-h-screen flex items-center justify-center py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-4xl bg-white shadow-2xl rounded-lg p-8">
            <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Solicitação de Acesso ao POP</h1>
            <form action="#" method="POST" class="space-y-6">
                <!-- Informações do Solicitante -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Nome Completo *</label>
                        <input type="text" name="name" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Empresa *</label>
                        <input type="text" name="company" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Telefone *</label>
                        <input type="tel" name="phone" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Email *</label>
                        <input type="email" name="email" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">RG/CPF *</label>
                        <input type="text" name="document" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                </div>

                <!-- Detalhes do Acesso -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium">POP *</label>
                        <select name="pop_id" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500 bg-white" required>
                            <option value="">Selecione um POP</option>
                            <option value="1">POP 1</option>
                            <option value="2">POP 2</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Data de Acesso *</label>
                        <input type="date" name="access_date" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Horário *</label>
                        <input type="time" name="access_time" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Motivo da Visita *</label>
                        <textarea name="reason" rows="3" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500" required></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Acompanhantes</label>
                        <textarea name="companions" rows="2" placeholder="Nome e documento dos acompanhantes (se houver)" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500"></textarea>
                    </div>
                </div>

                <label class="block text-gray-700 font-medium mt-4">Equipe de Trabalho</label>

                <!-- Tabela dentro do CKEditor -->
                <textarea name="team_notes" id="editor" rows="3" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-indigo-500 mb-6">
                    <table class="table" border="1" cellpadding="5" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="padding: 5px; text-align: left;">Nome Completo</th>
                                <th style="padding: 5px; text-align: left;">RG/CPF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                            </tr>
                        </tbody>
                    </table>
                </textarea>

                <div class="text-right">
                    <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Enviar Solicitação</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>
<?php /**PATH C:\Users\dsilv\OneDrive\Documentos\Projetos\ANDAMENTO\SUPORTE_B2B\resources\views/pop-access/request-form.blade.php ENDPATH**/ ?>