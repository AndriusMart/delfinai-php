function Msg({msg}) {

    if(null === msg){
        return;
    }
    return (
        <div className="msg-bin">
            <div className="msg">
                {msg}
            </div>
        </div>
    )

}

export default Msg;