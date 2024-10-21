import React, { useState } from 'react';
import { View, Text, TextInput, Button } from 'react-native';
import { useNavigation } from '@react-navigation/native';

const Inscription = () => {
  const [email, setEmail] = useState('');
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');
  const navigation = useNavigation();

  const handleInscription = () => {
    const userData = {
      email: email,
      username: username,
      password: password,
    };

    fetch('https://mysnapchat.epidoc.eu/user', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(userData),
    })
      .then((response) => {
       
        if (response.ok) {
          
          console.log('inscription reussie')
          
        } else {
        
          console.error('Erreur lors de l\'inscription');
        }
      })
      .catch((error) => {
       
        console.error('Erreur de requête API:', error);
      });
  };

  return (
    <View style={{}}>
      <Text style={{ textAlign: 'center', marginTop: 120, fontSize: 30 }}>
        Inscription
      </Text>
      <TextInput
        placeholder="email"
        style={styles.input}
        onChangeText={(text) => setEmail(text)}
        value={email}
      />
      <TextInput
        placeholder="username"
        style={styles.input}
        onChangeText={(text) => setUsername(text)}
        value={username}
      />
      <TextInput
        secureTextEntry={true}
        placeholder="password"
        style={styles.input}
        onChangeText={(text) => setPassword(text)}
        value={password}
      />

      <Button title="S'inscrire" onPress={handleInscription} />
    </View>
  );
};

const styles = {
  input: {
    borderWidth: 1,
    borderColor: 'silver',
    width: 300,
    borderRadius: 10,
    alignItems: 'center',
    marginLeft: 'auto',
    marginRight: 'auto',
    padding: 5,
    margin: 10,
  },
};

export default Inscription;
