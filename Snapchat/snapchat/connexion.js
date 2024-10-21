import React, { useState } from 'react';
import { View, Text, TextInput, Button, Alert, TouchableOpacity, Image } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import InfoUser from './InfoUser';

import CameraPage from './CameraPage';
import AsyncStorage from '@react-native-async-storage/async-storage';

const Stack = createStackNavigator();
const Connexion = () => {
  <NavigationContainer>
  <Stack.Navigator styles={styles.nav} screenOptions={{headerShown:false}}>

    <Stack.Screen name="InfoUser" component={InfoUser} />

  </Stack.Navigator>
</NavigationContainer>
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const navigation = useNavigation();
  const [isLoggedIn, setIsLoggedIn] = useState(false); 

  const handleConnexion = () => {
    const userData = {
      email: email,
      password: password,
    };
  
    fetch('https://mysnapchat.epidoc.eu/user', {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(userData),
    })
      .then((response) => {
        if (response.ok) {
          return response.json(); 
        } else {
          throw new Error('Erreur lors de la connexion');
        }
      })
      .then((data) => {
        const token = data.token;
  
        AsyncStorage.setItem('token', token);
  
        setIsLoggedIn(true);
        navigation.navigate('CameraPage');
      })
      .catch((error) => {
        console.error('Erreur de requête API:', error);
      });
  };

  if (isLoggedIn) {
    return (
      <View style={styles.container}>
        <Image style={styles.logo} source={require('./assets/logo.png')} />
        <Text style={{fontSize: 20, justifyContent: 'center', padding: 30, marginTop: 30}}>Vous êtes déja connecté(e)</Text>
        <Button title="Déconnexion" onPress={() => setIsLoggedIn(false)} />
        <TouchableOpacity
        style={styles.button3}
        onPress={() => navigation.navigate('InfoUser')}
      >
        <Text style={styles.buttonText2}>Amis</Text>
      </TouchableOpacity>
        <TouchableOpacity
        style={styles.button2}
        onPress={() => navigation.navigate('CameraPage')}
      >
        <Text style={styles.buttonphoto}>Retour à l'appareil photo</Text>
      </TouchableOpacity>
      </View>
    );
  }

  return (
    <View style={{}}>
      <Text style={{ textAlign: 'center', marginTop: 120, fontSize: 30 }}>
        Connexion
      </Text>
      <TextInput
        placeholder="email"
        onChangeText={setEmail}
        value={email}
        style={styles.input}
      />
      <TextInput
        secureTextEntry={true}
        onChangeText={setPassword}
        value={password}
        placeholder="password"
        style={styles.input}
      />

      <Button

        title="Se connecter"
        onPress={handleConnexion}
      />
    </View>
  );
};

const styles = {
  input: {
    borderWidth: 0.5,
    borderColor: 'silver',
    width: 300,
    borderRadius: 10,
    alignItems: 'center',
    marginLeft: 'auto',
    marginRight: 'auto',
    padding: 5,
    margin: 10,
    fontSize:20,
    height: 30,
  },
  container: {
    flex: 1,
    backgroundColor: '#FFFC00',
    alignItems: 'center',
    justifyContent: 'center',
    fontSize: 100,
  },
  logo: {
    width: 130,
    height: 130,
    marginBottom: 300,
  },

};

export default Connexion;