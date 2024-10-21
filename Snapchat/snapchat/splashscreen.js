import React, { useEffect } from 'react';
import { View, Image } from 'react-native';


const SplashScreen = ({ navigation }) => {
  useEffect(() => {
    setTimeout(() => {
      navigation.navigate('Accueil'); 
    }, 800);
  }, []);

  return (
    <View style={{ backgroundColor: '#FFFC00', flex: 1, alignItems: 'center', justifyContent: 'center' }}>
      <Image style={{width:120, height:120}} source={require('./assets/logo.png')} />
    </View>
  );
};

export default SplashScreen;
