/*const rows = document.querySelectorAll('.row')

const onDragover = (event) =>
{
    event.preventDefault();
}

const onDrop = (event) =>
{
    event.preventDefault();

    console.log('Dropped Element')
}

rows.forEach( (row) => 
{
    row.ondragover = onDragover;
    row.ondrop = onDrop;
})