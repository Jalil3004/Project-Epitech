import React, { useEffect, useState } from 'react';
import { View, Text } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';

const InfoUser = () => {
  const [username, setUsername] = useState('');

  useEffect(() => {
    const fetchData = async () => {
      try {
        
        const token = await AsyncStorage.getItem('token');

        const response = await fetch('https://mysnapchat.epidoc.eu/user', {
            method: 'GET',
          headers: {
            'Authorization': `Bearer ${token}`,
          },
        });

        if (response.ok) {
          const data = await response.json();
          setUsername(data.username);
        } else {
          throw new Error('Erreur lors de la récupération des données utilisateur');
        }
      } catch (error) {
        console.error(error);
      }
    };

    fetchData();
  }, []);

  return (
    <View>
      <Text>Username: {username}</Text>
    </View>
  );
};

export default InfoUser;
