<?PHP

class Boot extends CI_Model {

    function __construct () {
        parent::__construct ();
    }
    function bootPath ($contoller_path='') {
        $data["base_url"]   = $this->config->item ("base_url");
        $data["css"]     = $this->config->item ("css");
        $data["js"] = $this->config->item ("js");
        $data["images"]     = $this->config->item ("images");
        $data["path"]       = $data["base_url"] . $contoller_path;
        //$data["uploadpath"] = $this->config->item ("uploadpath");
        //$data['uploads']    = $this->config->item ("datafile_path_vendor_uploads");//"/vendoruploads";
        //$data["ajaxpath"]   = $this->config->item ("ajaxpath");
        $data["title"]      = "";
        return $data;
    }
}
