import { Link } from 'react-router-dom'

export default function Registro() {
  return (
    <>
      <h1 className="text-4xl text-center font-bold mt-20">Iniciar sesión</h1>
      
      <div className="shadow-md max-w-4xl mx-auto rounded-md mt-10 px-10 py-10 bg-white m-10">
          <form>
            <div className="mb-4">
              <label
                className="text-slate-800 font-bold"
                htmlFor="email"
              >E-mail</label>

              <input 
                type="email"
                name="email"
                id="email"
                className="mt-2 w-full p-3 bg-gray-50"
                placeholder="Tu e-mail"
              />
            </div>

            <div className="mb-4">
              <label
                className="text-slate-800 font-bold"
                htmlFor="password"
              >Password</label>

              <input 
                type="password"
                name="password"
                id="password"
                className="mt-2 w-full p-3 bg-gray-50"
                placeholder="Tu password"
              />
            </div>

            <input
              type="submit"
              value="Iniciar sesión"
              className="bg-indigo-600 hover:bg-indigo-800 w-full text-white mt-5 p-3 font-bold cursor-pointer "
            />

          </form>
      </div>

      <nav className="mt-5">
        <Link to="/auth/registro">
          <p className="text-center text-indigo-400">¿No tienes cuenta aún? Crea una aquí</p>
        </Link>
      </nav>
    </>
  )
}
