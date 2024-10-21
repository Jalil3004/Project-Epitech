import React, { useState, useEffect } from 'react';
import { View, Text, Button, Alert, TouchableOpacity, Image } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import { Camera } from 'expo-camera';
import AsyncStorage from '@react-native-async-storage/async-storage';

import * as MediaLibrary from 'expo-media-library';

const LogOut = () => {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  const navigation = useNavigation();

  const handleLogout = () => {
 
    setIsLoggedIn(false);
    navigation.navigate('Connexion');
  };

  return (
    <View>
      <Button title="Déconnexion" onPress={handleLogout} />
    </View>
  );
};

const Home = () => {
  const [hasPermission, setHasPermission] = useState(null);
  const [libraryPermission, setLibraryPermission] = useState(null);
  const [cameraRef, setCameraRef] = useState(null);
  const [capturedPhoto, setCapturedPhoto] = useState(null);

  useEffect(() => {
    (async () => {
      const cameraStatus = await Camera.requestPermissionsAsync();
      const libraryStatus = await MediaLibrary.requestPermissionsAsync();
      setHasPermission(cameraStatus.status === 'granted');
      setLibraryPermission(libraryStatus.status === 'granted');
    })();
  }, []);

  const takePicture = async () => {
    if (cameraRef && libraryPermission) {
      const photo = await cameraRef.takePictureAsync();
      const asset = await MediaLibrary.createAssetAsync(photo.uri);
      
      if (asset) {
        setCapturedPhoto(photo); 
      } else {
        Alert.alert('Erreur', "Impossible d'enregistrer la photo dans votre album.");
      }
    }
  };

  if (hasPermission === null || libraryPermission === null) {
    return <View />;
  }

  if (hasPermission === false || libraryPermission === false) {
    return <Text>No access to camera or media library</Text>;
  }

  return (
    <View style={{ flex: 1 }}>
      {capturedPhoto ? (
        <Image source={{ uri: capturedPhoto.uri }} style={{ flex: 1 }} />
      ) : (
        <Camera style={{ flex: 1 }} type={Camera.Constants.Type.back} ref={ref => setCameraRef(ref)}>
          <View style={{ flex: 1, backgroundColor: 'transparent', flexDirection: 'row' }}>
            <TouchableOpacity style={{ flex: 0.1, alignSelf: 'flex-end', alignItems: 'center' }} onPress={takePicture}>
              <Text style={{ fontSize: 18, marginBottom: 100, marginLeft: 160, marginRight: 'auto', color: 'white', width: 70 }}>Capture</Text>
            </TouchableOpacity>
          </View>
        </Camera>
      )}
    </View>
  );
};

export default Home;
