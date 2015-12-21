var year = parseInt(readline());
step1();

function step1()
{
    if(year % 4 == 0)
    {
        step2();
    }
    else
    {
        step5();
    }
}

function step2()
{
    if(year % 100 == 0)
    {
        step3();
    }
    else
    {
        step4();
    }
}

function step3()
{
    if(year % 400 == 0)
    {
        step4();
    }
    else
    {
        step5();
    }
}

function step4()
{
    print('true');
}
function step5()
{
    print('false');
}

