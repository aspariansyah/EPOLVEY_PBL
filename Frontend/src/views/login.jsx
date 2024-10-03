import React from 'react';
import feed from '../assets/feedback.png';
import vec1 from '../assets/Vector1.png';
import vec2 from '../assets/Vector2.png';

const Login = () => {
  return (
    <div className="flex h-screen bg-white overflow-hidden">
      <div className="w-1/2 h-screen grid justify-center items-center bg-teal rounded-tr-2xl">
        <div className="p-8">
          <img src={feed} alt="Illustration" className="h-full w-[550px] object-cover relative bottom-36" />
        </div>
        <div className="absolute bottom-0 w-1/2">
          <img src={vec1} alt="Vector Illustration" className="w-full" />
        </div>
        <div className="absolute bottom-0 w-full">
          <img src={vec2} alt="Vector Illustration" className="w-full" />
        </div>
      </div>

      <div className="w-1/2 flex justify-center items-center bg-white">
        <div className="w-full max-w-md p-8">
          <h1 className="text-3xl font-bold mb-6 text-gray-900 font-poppins tracking-wide">LOGIN</h1>

          <div className="mb-4" data-aos="fade-right">
            <input
              type="text"
              placeholder="Username"
              className="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
            />
          </div>


          <div className="mb-4" data-aos="fade-right">
            <input
              type="password"
              placeholder="Password"
              className="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"
            />
          </div>

          <div className="flex items-center my-4">
            <div className="flex-grow border-t border-gray-300"></div>
            <span className="mx-3 text-gray-500">OR</span>
            <div className="flex-grow border-t border-gray-300"></div>
          </div>

          <button className="w-full mb-4 flex items-center justify-center space-x-2 p-3 border border-gray-300 rounded-md hover:bg-gray-100">
            <img src="/assets/google-icon.png" alt="Google" className="h-6" />
            <span>Sign in with Google</span>
          </button>

          <button className="w-full mb-4 flex items-center justify-center space-x-2 p-3 border border-gray-300 rounded-md hover:bg-gray-100">
            <img src="/assets/facebook-icon.png" alt="Facebook" className="h-6" />
            <span>Sign in with Facebook</span>
          </button>

          <div className="text-center mt-4">
            <a href="#" className="text-sm text-blue-500 hover:underline">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Login;
