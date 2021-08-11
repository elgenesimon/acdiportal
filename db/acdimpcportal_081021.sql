USE [master]
GO
/****** Object:  Database [acdimpcportal]    Script Date: 10/08/2021 1:17:19 PM ******/
CREATE DATABASE [acdimpcportal]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'acdimpcportal', FILENAME = N'D:\program files\Microsoft SQL Server\MSSQL15.MSSQLSERVER01\MSSQL\DATA\acdimpcportal.mdf' , SIZE = 4096KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'acdimpcportal_log', FILENAME = N'D:\program files\Microsoft SQL Server\MSSQL15.MSSQLSERVER01\MSSQL\DATA\acdimpcportal_log.ldf' , SIZE = 5184KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [acdimpcportal] SET COMPATIBILITY_LEVEL = 110
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [acdimpcportal].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [acdimpcportal] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [acdimpcportal] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [acdimpcportal] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [acdimpcportal] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [acdimpcportal] SET ARITHABORT OFF 
GO
ALTER DATABASE [acdimpcportal] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [acdimpcportal] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [acdimpcportal] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [acdimpcportal] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [acdimpcportal] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [acdimpcportal] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [acdimpcportal] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [acdimpcportal] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [acdimpcportal] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [acdimpcportal] SET  DISABLE_BROKER 
GO
ALTER DATABASE [acdimpcportal] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [acdimpcportal] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [acdimpcportal] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [acdimpcportal] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [acdimpcportal] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [acdimpcportal] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [acdimpcportal] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [acdimpcportal] SET RECOVERY FULL 
GO
ALTER DATABASE [acdimpcportal] SET  MULTI_USER 
GO
ALTER DATABASE [acdimpcportal] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [acdimpcportal] SET DB_CHAINING OFF 
GO
ALTER DATABASE [acdimpcportal] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [acdimpcportal] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
ALTER DATABASE [acdimpcportal] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [acdimpcportal] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'acdimpcportal', N'ON'
GO
ALTER DATABASE [acdimpcportal] SET QUERY_STORE = OFF
GO
USE [acdimpcportal]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[failed_jobs](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[uuid] [nvarchar](255) NOT NULL,
	[connection] [nvarchar](max) NOT NULL,
	[queue] [nvarchar](max) NOT NULL,
	[payload] [nvarchar](max) NOT NULL,
	[exception] [nvarchar](max) NOT NULL,
	[failed_at] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_resets](
	[email] [nvarchar](255) NOT NULL,
	[token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[permission_role]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[permission_role](
	[permission_id] [bigint] NOT NULL,
	[role_id] [bigint] NOT NULL,
 CONSTRAINT [permission_role_permission_id_role_id_primary] PRIMARY KEY CLUSTERED 
(
	[permission_id] ASC,
	[role_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[permission_user]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[permission_user](
	[permission_id] [bigint] NOT NULL,
	[user_id] [bigint] NOT NULL,
	[user_type] [nvarchar](255) NOT NULL,
 CONSTRAINT [permission_user_user_id_permission_id_user_type_primary] PRIMARY KEY CLUSTERED 
(
	[user_id] ASC,
	[permission_id] ASC,
	[user_type] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[permissions]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[permissions](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[display_name] [nvarchar](255) NULL,
	[description] [nvarchar](255) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[role_user]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[role_user](
	[role_id] [bigint] NOT NULL,
	[user_id] [bigint] NOT NULL,
	[user_type] [nvarchar](255) NOT NULL,
 CONSTRAINT [role_user_user_id_role_id_user_type_primary] PRIMARY KEY CLUSTERED 
(
	[user_id] ASC,
	[role_id] ASC,
	[user_type] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[roles]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[roles](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[display_name] [nvarchar](255) NULL,
	[description] [nvarchar](255) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 10/08/2021 1:17:19 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[email_verified_at] [datetime] NULL,
	[password] [nvarchar](255) NOT NULL,
	[remember_token] [nvarchar](100) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
	[emp_id] [nvarchar](255) NOT NULL,
	[avatar] [nvarchar](255) NOT NULL,
	[lname] [nvarchar](255) NOT NULL,
	[mname] [nvarchar](255) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [failed_jobs_uuid_unique]    Script Date: 10/08/2021 1:17:19 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [failed_jobs_uuid_unique] ON [dbo].[failed_jobs]
(
	[uuid] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [password_resets_email_index]    Script Date: 10/08/2021 1:17:19 PM ******/
CREATE NONCLUSTERED INDEX [password_resets_email_index] ON [dbo].[password_resets]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [permissions_name_unique]    Script Date: 10/08/2021 1:17:19 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [permissions_name_unique] ON [dbo].[permissions]
(
	[name] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [roles_name_unique]    Script Date: 10/08/2021 1:17:19 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [roles_name_unique] ON [dbo].[roles]
(
	[name] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [users_email_unique]    Script Date: 10/08/2021 1:17:19 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [users_email_unique] ON [dbo].[users]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
ALTER TABLE [dbo].[failed_jobs] ADD  DEFAULT (getdate()) FOR [failed_at]
GO
ALTER TABLE [dbo].[users] ADD  DEFAULT ('default.jpg') FOR [avatar]
GO
ALTER TABLE [dbo].[permission_role]  WITH CHECK ADD  CONSTRAINT [permission_role_permission_id_foreign] FOREIGN KEY([permission_id])
REFERENCES [dbo].[permissions] ([id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[permission_role] CHECK CONSTRAINT [permission_role_permission_id_foreign]
GO
ALTER TABLE [dbo].[permission_role]  WITH CHECK ADD  CONSTRAINT [permission_role_role_id_foreign] FOREIGN KEY([role_id])
REFERENCES [dbo].[roles] ([id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[permission_role] CHECK CONSTRAINT [permission_role_role_id_foreign]
GO
ALTER TABLE [dbo].[permission_user]  WITH CHECK ADD  CONSTRAINT [permission_user_permission_id_foreign] FOREIGN KEY([permission_id])
REFERENCES [dbo].[permissions] ([id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[permission_user] CHECK CONSTRAINT [permission_user_permission_id_foreign]
GO
ALTER TABLE [dbo].[role_user]  WITH CHECK ADD  CONSTRAINT [role_user_role_id_foreign] FOREIGN KEY([role_id])
REFERENCES [dbo].[roles] ([id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[role_user] CHECK CONSTRAINT [role_user_role_id_foreign]
GO
USE [master]
GO
ALTER DATABASE [acdimpcportal] SET  READ_WRITE 
GO
