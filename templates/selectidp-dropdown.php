<?php
if (!array_key_exists('header', $this->data)) {
    $this->data['header'] = 'selectidp';
}


$this->data['header'] = $this->t($this->data['header']);
$this->data['autofocus'] = 'dropdownlist';
//$this->includeAtTemplateBase('includes/header.php');

foreach ($this->data['idplist'] as $idpentry) {
    if (!empty($idpentry['name'])) {
        $this->getTranslator()->includeInlineTranslation(
            'idpname_'.$idpentry['entityid'],
            $idpentry['name']
        );
    } elseif (!empty($idpentry['OrganizationDisplayName'])) {
        $this->getTranslator()->includeInlineTranslation(
            'idpname_'.$idpentry['entityid'],
            $idpentry['OrganizationDisplayName']
        );
    }
    if (!empty($idpentry['description'])) {
        $this->getTranslator()->includeInlineTranslation('idpdesc_'.$idpentry['entityid'], $idpentry['description']);
    }
}
?>
<!--    <h2>--><?php //echo $this->data['header']; ?><!--</h2>-->
<!--    <p>--><?php //echo $this->t('selectidp_full'); ?><!--</p>-->
<!--    <form method="get" action="--><?php //echo $this->data['urlpattern']; ?><!--">-->
<!--        <input type="hidden" name="entityID" value="--><?php //echo htmlspecialchars($this->data['entityID']); ?><!--"/>-->
<!--        <input type="hidden" name="return" value="--><?php //echo htmlspecialchars($this->data['return']); ?><!--"/>-->
<!--        <input type="hidden" name="returnIDParam"-->
<!--               value="--><?php //echo htmlspecialchars($this->data['returnIDParam']); ?><!--"/>-->
<!--        <select id="dropdownlist" name="idpentityid">-->
            <?php
            usort($this->data['idplist'], function ($idpentry1, $idpentry2) {
                return strcmp(
                    $this->t('idpname_'.$idpentry1['entityid']),
                    $this->t('idpname_'.$idpentry2['entityid'])
                );
            });
//
//            foreach ($this->data['idplist'] as $idpentry) {
//                echo '<option value="'.htmlspecialchars($idpentry['entityid']).'"';
//                if (isset($this->data['preferredidp']) && $idpentry['entityid'] == $this->data['preferredidp']) {
//                    echo ' selected="selected"';
//                }
//                echo '>'.htmlspecialchars($this->t('idpname_'.$idpentry['entityid'])).'</option>';
//            }
//            ?>
<!--        </select>-->
<!--        <button class="btn" type="submit">--><?php //echo $this->t('select'); ?><!--</button>-->
<!--        --><?php
//        if ($this->data['rememberenabled']) {
//            echo('<br/><input type="checkbox" name="remember" value="1" />'.$this->t('remember'));
//        }
//        ?>
<!--    </form>-->
<?php
    //create array of data to be posted
    $post_data['entityID'] = htmlspecialchars($this->data['entityID']);
    $post_data['return'] = htmlspecialchars($this->data['return']);
    $post_data['returnIDParam'] = htmlspecialchars($this->data['returnIDParam']);
    $post_data['idpentityid'] = htmlspecialchars($this->data['idplist'][1]['entityid']);
    $post_data['remember'] = '1';

    //traverse array and prepare data for posting (key1=value1)
    foreach ( $post_data as $key => $value) {
        $post_items[] = $key . '=' . $value;
    }

    //create the final string to be posted using implode()
    $post_string = implode ('&', $post_items);

    $url =  $this->data['urlpattern'].'?'.$post_string;
//    echo $url;
    header('Location: '.$url, true);
//    header('Location: https://google.com', true);

?>
<?php //$this->includeAtTemplateBase('includes/footer.php');
