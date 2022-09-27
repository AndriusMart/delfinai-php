import '../../sass/square.scss';


function RedSquare({ color, size }) {
    return (
        <div className='square' style={{
               backgroundColor: color,
            }}></div>
    );
}

export default RedSquare;
