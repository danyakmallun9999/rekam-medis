<script>
    // Sidebar toggle functionality
    const sidebar = document.getElementById('sidebar');
    const hamburger = document.getElementById('hamburger');
    const closeSidebar = document.getElementById('closeSidebar');
    const mainContent = document.getElementById('mainContent');

    function toggleSidebar() {
        sidebar.classList.toggle('-translate-x-full');
    }

    hamburger.addEventListener('click', toggleSidebar);
    closeSidebar.addEventListener('click', toggleSidebar);

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 640) { // sm breakpoint
            if (!sidebar.contains(e.target) && !hamburger.contains(e.target) && !sidebar.classList.contains('-translate-x-full')) {
                toggleSidebar();
            }
        }
    });

    // Sample chart
    // const ctx = document.getElementById("userChart").getContext("2d");
    // new Chart(ctx, {
    //   type: "line",
    //   data: {
    //     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    //     datasets: [
    //       {
    //         label: "Pengguna Baru",
    //         data: [65, 59, 80, 81, 56, 55],
    //         borderColor: "rgb(59, 130, 246)",
    //         tension: 0.1,
    //       },
    //     ],
    //   },
    //   options: {
    //     responsive: true,
    //     maintainAspectRatio: false,
    //   },
    // });
</script>
</body>

</html>