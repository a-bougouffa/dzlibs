API Specifications
===========================

The desired API design will be in the following form: `api.dzlibs.io/SERVICE`

SERVICE is one of:

    data            : some databases (wilayas...)
    prayertimes     : calculate prayer times for specific location
    qiblah          : qiblah direction form specific location
    hijri           : hijri date converted from gregorian and vice versa
    ...             : other implementable functions


The 'data' part is the more big and **generic** part, the API database will be a set of tables, exemple 'wilayas', 'dairas', 'communes', 'traditional-foods'...

The general rule for data extract is: `api.dzlibs.io/data/SOURCE/COLUMN1[/COLUMN2...N][?COLUMN1=VALUE]`

For exemple, if we have a table like this:

    +---------------------------------------------+
    |                  wilayas                    |
    +----+-------+---------+------+------+--------+
    | id | name  | name_ar | long | lati | ...... |
    +----+-------+---------+------+------+--------+
    | 01 | Adrar | أدرار  | .... | .... | ...... |
    | .. | ..... | ....... | .... | .... | ...... |
    +----+-------+---------+------+------+--------+


And we wants to extract some informations: `SELECT id, name, name_ar FROM wilayas WHERE id=35`

We just send a get request like this `curl http://api.dzlibs.io/data/wilayas/id/name/name_ar?id=35`
