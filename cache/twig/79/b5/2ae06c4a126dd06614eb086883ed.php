<?php

/* plupload.html */
class __TwigTemplate_79b52ae06c4a126dd06614eb086883ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
//<![CDATA[
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 5
        echo addslashes($this->env->getExtension('phpbb')->lang("BYTES_SHORT"));
        echo "',
\t\t'kb': '";
        // line 6
        echo addslashes($this->env->getExtension('phpbb')->lang("KB"));
        echo "',
\t\t'mb': '";
        // line 7
        echo addslashes($this->env->getExtension('phpbb')->lang("MB"));
        echo "',
\t\t'gb': '";
        // line 8
        echo addslashes($this->env->getExtension('phpbb')->lang("GB"));
        echo "',
\t\t'tb': '";
        // line 9
        echo addslashes($this->env->getExtension('phpbb')->lang("TB"));
        echo "',
\t\t'Add Files': '";
        // line 10
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES"));
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 11
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"));
        echo "',
\t\t'Close': '";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_CLOSE"));
        echo "',
\t\t'Drag files here.': '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG"));
        echo "',
\t\t'Duplicate file error.': '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DUPLICATE_ERROR"));
        echo "',
\t\t'File: %s': '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE"));
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE_DETAILS"));
        echo "',
\t\t'File count error.': '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_COUNT"));
        echo "',
\t\t'File extension error.': '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_EXTENSION_ERROR"));
        echo "',
\t\t'File size error.': '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE_ERROR"));
        echo "',
\t\t'File too large:': '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"));
        echo "',
\t\t'Filename': '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILENAME"));
        echo "',
\t\t'Generic error.': '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_GENERIC_ERROR"));
        echo "',
\t\t'HTTP Error.': '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_HTTP_ERROR"));
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IMAGE_FORMAT"));
        echo "',
\t\t'Init error.': '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_INIT_ERROR"));
        echo "',
\t\t'IO error.': '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IO_ERROR"));
        echo "',
\t\t'Invalid file extension:': '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"));
        echo "',
\t\t'N/A': '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_NOT_APPLICABLE"));
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 29
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"));
        echo "',
\t\t'Security error.': '";
        // line 30
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SECURITY_ERROR"));
        echo "',
\t\t'Select files': '";
        // line 31
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SELECT_FILES"));
        echo "',
\t\t'Size': '";
        // line 32
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE"));
        echo "',
\t\t'Start Upload': '";
        // line 33
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_UPLOAD"));
        echo "',
\t\t'Start uploading queue': '";
        // line 34
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_CURRENT_UPLOAD"));
        echo "',
\t\t'Status': '";
        // line 35
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STATUS"));
        echo "',
\t\t'Stop Upload': '";
        // line 36
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_UPLOAD"));
        echo "',
\t\t'Stop current upload': '";
        // line 37
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"));
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 38
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_UPLOAD_URL"));
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 39
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_UPLOADED"));
        echo "',
\t\t'%d files queued': '";
        // line 40
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILES_QUEUED"));
        echo "',
\t\t'%s already present in the queue.': '";
        // line 41
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ALREADY_QUEUED"));
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 45
        if (isset($context["S_PLUPLOAD_URL"])) { $_S_PLUPLOAD_URL_ = $context["S_PLUPLOAD_URL"]; } else { $_S_PLUPLOAD_URL_ = null; }
        echo $_S_PLUPLOAD_URL_;
        echo "',
\t\tmax_file_size: '";
        // line 46
        if (isset($context["FILESIZE"])) { $_FILESIZE_ = $context["FILESIZE"]; } else { $_FILESIZE_ = null; }
        echo $_FILESIZE_;
        echo "b',
\t\tchunk_size: '";
        // line 47
        if (isset($context["CHUNK_SIZE"])) { $_CHUNK_SIZE_ = $context["CHUNK_SIZE"]; } else { $_CHUNK_SIZE_ = null; }
        echo $_CHUNK_SIZE_;
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 49
        if (isset($context["FILTERS"])) { $_FILTERS_ = $context["FILTERS"]; } else { $_FILTERS_ = null; }
        echo $_FILTERS_;
        echo "],
\t\t";
        // line 50
        if (isset($context["S_RESIZE"])) { $_S_RESIZE_ = $context["S_RESIZE"]; } else { $_S_RESIZE_ = null; }
        echo $_S_RESIZE_;
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 53
        echo addslashes($this->env->getExtension('phpbb')->lang("ADD_FILE"));
        echo "'},
\t\tform_hook: '#postform',
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 59
        echo addslashes($this->env->getExtension('phpbb')->lang("ERROR"));
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 60
        echo addslashes($this->env->getExtension('phpbb')->lang("TOO_MANY_ATTACHMENTS"));
        echo "',
\t},
\torder: '";
        // line 62
        if (isset($context["ATTACH_ORDER"])) { $_ATTACH_ORDER_ = $context["ATTACH_ORDER"]; } else { $_ATTACH_ORDER_ = null; }
        echo $_ATTACH_ORDER_;
        echo "',
\tmaxFiles: ";
        // line 63
        if (isset($context["MAX_ATTACHMENTS"])) { $_MAX_ATTACHMENTS_ = $context["MAX_ATTACHMENTS"]; } else { $_MAX_ATTACHMENTS_ = null; }
        echo $_MAX_ATTACHMENTS_;
        echo ",
\tdata: ";
        // line 64
        if (isset($context["S_ATTACH_DATA"])) { $_S_ATTACH_DATA_ = $context["S_ATTACH_DATA"]; } else { $_S_ATTACH_DATA_ = null; }
        echo $_S_ATTACH_DATA_;
        echo ",
}
//]]>
</script>
";
        // line 68
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        $asset_file = (("" . $_T_ASSETS_PATH_) . "/plupload/plupload.full.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 69
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        $asset_file = (("" . $_T_ASSETS_PATH_) . "/javascript/plupload.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 69,  232 => 64,  227 => 63,  222 => 62,  217 => 60,  213 => 59,  197 => 50,  192 => 49,  186 => 47,  165 => 40,  161 => 39,  153 => 37,  149 => 36,  145 => 35,  133 => 32,  125 => 30,  121 => 29,  113 => 27,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  81 => 19,  77 => 18,  69 => 16,  61 => 14,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  29 => 6,  198 => 80,  184 => 73,  177 => 70,  169 => 41,  157 => 38,  150 => 63,  141 => 34,  129 => 31,  109 => 26,  94 => 32,  86 => 30,  82 => 29,  71 => 24,  65 => 15,  56 => 16,  51 => 15,  44 => 11,  33 => 7,  24 => 4,  330 => 84,  325 => 81,  310 => 80,  307 => 79,  291 => 78,  288 => 77,  273 => 76,  265 => 72,  262 => 71,  249 => 70,  245 => 69,  240 => 68,  234 => 63,  219 => 62,  216 => 61,  204 => 53,  195 => 49,  190 => 48,  185 => 46,  181 => 46,  176 => 45,  173 => 41,  170 => 40,  155 => 39,  152 => 38,  137 => 33,  134 => 59,  126 => 31,  122 => 30,  117 => 28,  114 => 26,  105 => 25,  102 => 23,  96 => 19,  90 => 31,  85 => 20,  76 => 14,  73 => 17,  63 => 10,  60 => 9,  57 => 13,  47 => 6,  37 => 8,  34 => 3,  31 => 2,  39 => 10,  25 => 5,  22 => 2,  19 => 1,);
    }
}
