import express from 'express';
import cors from 'cors'; // 导入 cors 模块

const app = express();
const port = 5000;

app.use(cors()); // 使用 cors 解决跨域问题
app.use(express.json());

app.get('/api/data', (req, res) => {
    res.json({ message: 'Hello from the backend!' });
});

app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});
