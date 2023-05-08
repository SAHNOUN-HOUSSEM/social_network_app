import React, { useEffect } from "react";  
import { PhotoIcon } from '@heroicons/react/24/solid'
import { uploadImage } from "../../api/Accounts/accountsController";
import { useState } from "react";
import { fetchData, postData } from "../../api/utilities";

function CoverImage(props) {

  const [image, setImage] = useState(null);

  const handleFileInputChange = async (event) => {
    const reader = new FileReader();
    reader.onload = () => {
      setImage(reader.result);
    };
    reader.readAsDataURL(event.target.files[0]);

    props.setFile(event.target.files[0]);
  };







    return(
        <div className="col-span-full">
        <label htmlFor="cover-photo" className="block text-sm font-medium leading-6 text-gray-900">
          Cover photo
        </label>
        <div className="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
         style={{ backgroundImage: `url(${image})` ,backgroundSize: 'cover'}}>
          <div className="text-center">
            <PhotoIcon className="mx-auto h-12 w-12 text-gray-300" aria-hidden="true" />
            <div className="mt-4 flex text-sm leading-6 text-gray-600">
              <label
                htmlFor="file-upload"
                className="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500"
              >
                <span>Upload a file</span>
                <input onChange={handleFileInputChange} id="file-upload" name="file-upload" type="file" className="sr-only" accept="image/*" />
              </label>
              <p className="pl-1">or drag and drop</p>
            </div>
            <p className="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
          </div>
        </div>
      </div>
    )
}

export default CoverImage;