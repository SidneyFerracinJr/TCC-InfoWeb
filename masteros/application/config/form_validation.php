<?php defined('BASEPATH') or exit('No direct script access allowed');

$config = [
    'clientes' => [
        [
            'field' => 'nomeCliente',
            'label' => 'Nome',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'documento',
            'label' => 'CPF/CNPJ',
            'rules' => 'trim|verific_cpf_cnpj',
            'errors' => [
                'verific_cpf_cnpj' => "O campo %s não é um CPF ou CNPJ válido."
            ],
        ],
        [
            'field' => 'telefone',
            'label' => 'Telefone',
            'rules' => 'trim',
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email',
        ],
        [
            'field' => 'rua',
            'label' => 'Rua',
            'rules' => 'trim',
        ],
        [
            'field' => 'bairro',
            'label' => 'Bairro',
            'rules' => 'trim',
        ],
        [
            'field' => 'cidade',
            'label' => 'Cidade',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'estado',
            'label' => 'Estado',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'cep',
            'label' => 'CEP',
            'rules' => 'trim',
        ]
    ],
    'servicos' => [
        [
            'field' => 'nome',
            'label' => 'Nome',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'descricao',
            'label' => '',
            'rules' => 'trim',
        ],
        [
            'field' => 'preco',
            'label' => '',
            'rules' => 'trim',
        ]
    ],
    'produtos' => [
        [
            'field' => 'descricao',
            'label' => '',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'unidade',
            'label' => 'Unidade',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'precoCompra',
            'label' => 'Preço de Compra',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'precoVenda',
            'label' => 'Preço de Venda',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'estoque',
            'label' => 'Estoque',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'estoqueMinimo',
            'label' => 'Estoque Minimo',
            'rules' => 'trim',
        ]
    ],
    'usuarios' => [
        [
            'field' => 'nome',
            'label' => 'Nome',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'rg',
            'label' => 'RG',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'cpf',
            'label' => 'CPF',
            'rules' => 'required|trim|verific_cpf_cnpj|is_unique[usuarios.cpf]',
            'errors' => [
                'verific_cpf_cnpj' => "O campo %s não é um CPF válido."
            ],
        ],
        [
            'field' => 'rua',
            'label' => 'Rua',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'numero',
            'label' => 'Numero',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'bairro',
            'label' => 'Bairro',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'cidade',
            'label' => 'Cidade',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'estado',
            'label' => 'Estado',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'cep',
            'label' => 'CEP',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email|is_unique[usuarios.email]',
        ],
        [
            'field' => 'senha',
            'label' => 'Senha',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'telefone',
            'label' => 'Telefone',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'situacao',
            'label' => 'Situacao',
            'rules' => 'required|trim',
        ]
    ],
    'os' => [
        [
            'field' => 'dataInicial',
            'label' => 'DataInicial',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'dataFinal',
            'label' => 'DataFinal',
            'rules' => 'trim|required',
        ],
        [
            'field' => 'garantia',
            'label' => 'Garantia',
            'rules' => 'trim|numeric',
            'errors' => [
                'numeric' => 'Por favor, digite apenas números.'
            ],
        ],
        [
            'field' => 'termoGarantia',
            'label' => 'Termo Garantia',
            'rules' => 'trim',
        ],
        [
            'field' => 'descricaoProduto',
            'label' => 'DescricaoProduto',
            'rules' => 'trim',
        ],
        [
            'field' => 'defeito',
            'label' => 'Defeito',
            'rules' => 'trim',
        ],
        [
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'observacoes',
            'label' => 'Observacoes',
            'rules' => 'trim',
        ],
        [
            'field' => 'clientes_id',
            'label' => 'clientes',
            'rules' => 'trim|required',
        ],
        [
            'field' => 'usuarios_id',
            'label' => 'usuarios_id',
            'rules' => 'trim|required',
        ],
        [
            'field' => 'laudoTecnico',
            'label' => 'Laudo Tecnico',
            'rules' => 'trim',
        ]
    ],
    'tiposUsuario' => [
        [
            'field' => 'nomeTipo',
            'label' => 'NomeTipo',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'situacao',
            'label' => 'Situacao',
            'rules' => 'required|trim',
        ]
    ],
    'receita' => [
        [
            'field' => 'descricao',
            'label' => 'Descrição',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'valor',
            'label' => 'Valor',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'vencimento',
            'label' => 'Data Vencimento',
            'rules' => 'required|trim',
        ],

        [
            'field' => 'cliente',
            'label' => 'Cliente',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'tipo',
            'label' => 'Tipo',
            'rules' => 'required|trim',
        ]
    ],
    'despesa' => [
        [
            'field' => 'descricao',
            'label' => 'Descrição',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'valor',
            'label' => 'Valor',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'vencimento',
            'label' => 'Data Vencimento',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'fornecedor',
            'label' => 'Fornecedor',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'tipo',
            'label' => 'Tipo',
            'rules' => 'required|trim',
        ]
    ],
    'garantias' => [
        [
            'field' => 'dataGarantia',
            'label' => 'dataGarantia',
            'rules' => 'trim',
        ],
        [
            'field' => 'usuarios_id',
            'label' => 'usuarios_id',
            'rules' => 'trim',
        ],
        [
            'field' => 'refGarantia',
            'label' => 'refGarantia',
            'rules' => 'trim',
        ],
        [
            'field' => 'textoGarantia',
            'label' => 'textoGarantia',
            'rules' => 'required|trim',
        ]
    ],
    'pagamentos' => [
        [
            'field' => 'Nome',
            'label' => 'nomePag',
            'rules' => 'trim',
        ],
        [
            'field' => 'clientId',
            'label' => 'clientId',
            'rules' => 'trim',
        ],
        [
            'field' => 'clientSecret',
            'label' => 'clientSecret',
            'rules' => 'trim',
        ],
        [
            'field' => 'publicKey',
            'label' => 'publicKey',
            'rules' => 'trim',
        ],
        [
            'field' => 'accessToken',
            'label' => 'accessToken',
            'rules' => 'trim',
        ]
    ],
    'vendas' => [
        [
            'field' => 'dataVenda',
            'label' => 'Data da Venda',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'clientes_id',
            'label' => 'clientes',
            'rules' => 'trim|required',
        ],
        [
            'field' => 'usuarios_id',
            'label' => 'usuarios_id',
            'rules' => 'trim|required',
        ]
    ],
    'anotacoes_os' => [
        [
            'field' => 'anotacao',
            'label' => 'Anotação',
            'rules' => 'required|trim',
        ],
        [
            'field' => 'os_id',
            'label' => 'ID Os',
            'rules' => 'trim|required|integer',
        ]
    ],
    'adicionar_produto_os' => [
        [
            'field' => 'idProduto',
            'label' => 'idProduto',
            'rules' => 'trim|required|numeric',
        ],
        [
            'field' => 'quantidade',
            'label' => 'quantidade',
            'rules' => 'trim|required|numeric|greater_than[0]',
        ],
        [
            'field' => 'preco',
            'label' => 'preco',
            'rules' => 'trim|required|numeric|greater_than[0]',
        ],
        [
            'field' => 'idOsProduto',
            'label' => 'idOsProduto',
            'rules' => 'trim|required|numeric',
        ],
    ],
    'adicionar_servico_os' => [
        [
            'field' => 'idServico',
            'label' => 'idServico',
            'rules' => 'trim|required|numeric',
        ],
        [
            'field' => 'quantidade',
            'label' => 'quantidade',
            'rules' => 'trim|required|numeric|greater_than[0]',
        ],
        [
            'field' => 'preco',
            'label' => 'preco',
            'rules' => 'trim|required|numeric|greater_than[0]',
        ],
        [
            'field' => 'idOsServico',
            'label' => 'idOsServico',
            'rules' => 'trim|required|numeric',
        ],
    ]
];
