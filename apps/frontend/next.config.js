module.exports = {
    async rewrites() {
        return [
            {
                source: '/test/:path*',
                destination: 'http://localhost:8000/:path*' // Proxy to Backend
            }
        ]
    }
}
