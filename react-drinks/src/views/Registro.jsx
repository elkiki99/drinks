import { createRef, useState} from 'react'
import { Link } from 'react-router-dom'
import Alerta from '../components/Alerta'
import { useAuth } from '../hooks/useAuth'

export default function Registro() {

    const nameRef = createRef();
    const emailRef = createRef();
    const passwordRef = createRef();
    const passwordConfirmationRef = createRef();

    const [errores, setErrores] = useState([])
    const { registro } = useAuth({middleware: 'guest', url: '/'})

    const handleSubmit = async e => {
      e.preventDefault();

      const datos = {
        name: nameRef.current.value,
        email: emailRef.current.value,
        password: passwordRef.current.value,
        password_confirmation: passwordConfirmationRef.current.value
      }
      
      registro(datos, setErrores)
    }

    return (
      <>
        <h1 className="text-4xl text-center font-bold mt-20">Crea tu cuenta</h1>
        
        <div className="shadow-md md:max-w-2xl max-w-ful mx-auto rounded-md mt-10 px-10 py-10 bg-white m-10">
            <form
              onSubmit={handleSubmit}
              noValidate
            >
              { errores ? errores.map(error => <Alerta key={error}>{error}</Alerta>) : null }
              <div className="mb-4">
                <label
                  className="text-slate-800 font-bold"
                  htmlFor="name"
                >Nombre</label>

                <input 
                  type="text"
                  id="name"
                  name="nombre"  
                  className="mt-2 w-full p-3 bg-gray-50"
                  placeholder="Tu nombre"
                  ref={nameRef}
                />
              </div>

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
                  ref={emailRef}
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
                  ref={passwordRef}
                />
              </div>

              <div className="mb-4">
                <label
                  className="text-slate-800 font-bold"
                  htmlFor="password_confirmation"
                >Repetir password</label>

                <input 
                  type="password"
                  name="password_confirmation"
                  id="password_confirmation"
                  className="mt-2 w-full p-3 bg-gray-50"
                  placeholder="Repite tu password"
                  ref={passwordConfirmationRef}
                />
              </div>

              <input
                type="submit"
                value="Crear cuenta"
                className="bg-indigo-600 hover:bg-indigo-800 w-full text-white mt-5 p-3 font-bold cursor-pointer "
              />

            </form>
        </div>

        <nav className="mt-5">
          <Link to="/auth/login">
            <p className="text-center text-indigo-400">¿Ya tienes cuenta? Inicia sesión</p>
          </Link>
      </nav>
      </>
    )
  }
  