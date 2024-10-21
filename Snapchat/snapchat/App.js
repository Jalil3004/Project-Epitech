import React, { useEffect } from 'react';
import { StatusBar } from 'expo-status-bar';
import {  StyleSheet, Text, View, Image, TouchableOpacity } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

import Inscription from './Inscription';
import Connexion from './connexion';
import CameraPage from './CameraPage';
import InfoUser from './InfoUser';
import { useNavigation } from '@react-navigation/native';
import SplashScreen from './splashscreen';



const Stack = createStackNavigator();
export default function AppNavigator() {
  return (
    <NavigationContainer>
      <Stack.Navigator styles={styles.nav} screenOptions={{headerShown:false}}>
        <Stack.Screen name=" " component={App} />
        <Stack.Screen name="Inscription" component={Inscription} />
        <Stack.Screen name="Splash" component={SplashScreen} />
        <Stack.Screen name="Connexion" component={Connexion} />
        <Stack.Screen name="CameraPage" component={CameraPage} />
        <Stack.Screen name="InfoUser" component={InfoUser} />

      </Stack.Navigator>
    </NavigationContainer>
  );
}

export function App() {

;

 
  const navigation = useNavigation();
  return (
    <View style={styles.container}>
      <Text style={styles.title}></Text>
      <Image style={styles.logo} source={require('./assets/logo.png')} />
      <TouchableOpacity style={styles.button1} onPress={() => navigation.navigate('Connexion')}>
        <Text style={styles.buttonText1}>SE CONNECTER</Text>
        
      </TouchableOpacity>
      <TouchableOpacity
        style={styles.button2}
        onPress={() => navigation.navigate('Inscription')}
      >
        <Text style={styles.buttonText2}>S'INSCRIRE</Text>
      </TouchableOpacity>
      
  
     



    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#FFFC00',
    alignItems: 'center',
    justifyContent: 'center',
    fontSize: 100,
  },
  title: {
    fontSize: 30,
  },
  
  logo: {
    width: 130,
    height: 130,
    marginBottom: 300,
  },
  button1: {
    color: 'black',
    backgroundColor: '#01C4FE',
    height: 80,
    width: '100%',
    position: 'absolute',
    bottom: 0,
  },
  buttonText1: {
    textAlign: 'center',
    color: '#fff',
    padding: 22,
    fontSize: 28,
  },
  button2: {
    color: 'black',
    backgroundColor: '#FA5B5C',
    height: 80,
    width: '100%',
    position: 'absolute',
    bottom: 80,
  },
  button3: {
    color: 'black',
    backgroundColor: '#FA5B5C',
    height: 80,
    width: '100%',
    position: 'absolute',
    bottom: 430,
  },
  buttonText2: {
    textAlign: 'center',
    color: '#fff',
    padding: 22,
    fontSize: 28,
  },
});

