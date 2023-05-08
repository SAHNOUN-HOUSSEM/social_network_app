import React from "react";


const ActivityInfo = (props) => {
    

    return (
        <div className="flex justify-center py-4 lg:pt-4 pt-8">
        <div className="mr-4 p-3 text-center">
          <span className="text-xl font-bold block uppercase tracking-wide text-gray-700">
            {props.nbrFriends}
          </span>
          <span className="text-sm text-gray-500">Friends</span>
        </div>
        <div className="mr-4 p-3 text-center">
          <span className="text-xl font-bold block uppercase tracking-wide text-gray-700">
            {props.nbrPhotos}
          </span>
          <span className="text-sm text-gray-500">Photos</span>
        </div>
        <div className="lg:mr-4 p-3 text-center">
          <span className="text-xl font-bold block uppercase tracking-wide text-gray-700">
            {props.nbrComments}
          </span>
          <span className="text-sm text-gray-500">Comments</span>
        </div>
      </div>
    );
};


export default ActivityInfo;