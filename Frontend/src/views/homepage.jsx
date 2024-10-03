import React from 'react';
import { useNavigate } from 'react-router-dom';
import homepage from '../assets/gambar.png';

const Homepage = () => {
    const navigate = useNavigate(); //ngehook routes nye nih

    return (
        <div className="bg-gradient-to-r from-[#910000] to-[#4b0000] min-h-screen font-poppins">
            <div className="flex justify-end items-center p-6">
                <button
                    className="text-black bg-lime-300 px-4 py-2 rounded-full font-bold"
                    onClick={() => navigate('/login')} //pakek lah ni OnClick buat ngarahek ke login e
                >
                    Log In
                </button>
            </div>

            <div className="container mx-auto flex flex-col md:flex-row justify-center items-center h-full">
                <div className="text-center md:text-left text-white p-6">
                    <h1 className="text-6xl font-bold drop-shadow-xl">E-Survey</h1>
                    <h2 className="text-4xl mt-2 font-bold drop-shadow-xl font-poppins">ELECTRICAL ENGINEERING</h2>
                    <p className="mt-4 text-lg">
                        We believe that every input has significance.<br />
                        With this E-Survey, you can make a direct contribution <br />in providing your opinion.
                    </p>
                    <button className="bg-lime-300 text-black mt-8 px-8 py-4 rounded-md text-xl font-bold drop-shadow-xl">
                        Start Your Survey !
                    </button>
                </div>

                <div className="mt-8 md:mt-0 md:ml-16">
                    <img src={homepage} alt="Survey Illustration" className="h-auto w-[500px]" />
                </div>
            </div>

            <div className="absolute bottom-4 left-4 text-white">
                <a href="#" className="text-sm">About Me</a>
            </div>
        </div>
    );
};

export default Homepage;
