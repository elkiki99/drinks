
import useDrinks from "../hooks/useDrinks"
export default function Categoria({categoria}) {

    const {handleClickCategoria, categoriaActual} = useDrinks();
    const { id, nombre } = categoria

  return (  
    <div className={`${categoriaActual.id === id ? 'bg-green-400' : 'bg-white'} border w-full hover:bg-green-400 cursor-pointer`}>

        <button 
          className="md:text-start text-center text-lg p-3 w-full font-semibold cursor-pointer truncate"
          type="button"
          onClick={() => handleClickCategoria(id)}
        >
          {nombre}
        </button>
    </div>
  )
}
