import Logo from '../components/Logo'
import useDrinks from '../hooks/useDrinks'
import Categoria from './Categoria'

export default function Sidebar() { 

    const { categorias } = useDrinks()

  return (
    <aside className="md:w-72 fixed h-full overflow-y-auto">
        <div className="p-4">
            <Logo textSize={"6xl"} />
        </div>

        <div className='mt-10'>
            {categorias.map( categoria => (
                <Categoria 
                    key={categoria.id}
                    categoria={categoria}
                />
            ))}
        </div>
    </aside>
  )
}