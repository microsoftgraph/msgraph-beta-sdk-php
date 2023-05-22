<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Contains properties for Excluded Office365 Apps.
*/
class ExcludedApps implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new excludedApps and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExcludedApps
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExcludedApps {
        return new ExcludedApps();
    }

    /**
     * Gets the access property value. The value for if MS Office Access should be excluded or not.
     * @return bool|null
    */
    public function getAccess(): ?bool {
        return $this->getBackingStore()->get('access');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bing property value. The value for if Microsoft Search as default should be excluded or not.
     * @return bool|null
    */
    public function getBing(): ?bool {
        return $this->getBackingStore()->get('bing');
    }

    /**
     * Gets the excel property value. The value for if MS Office Excel should be excluded or not.
     * @return bool|null
    */
    public function getExcel(): ?bool {
        return $this->getBackingStore()->get('excel');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'access' => fn(ParseNode $n) => $o->setAccess($n->getBooleanValue()),
            'bing' => fn(ParseNode $n) => $o->setBing($n->getBooleanValue()),
            'excel' => fn(ParseNode $n) => $o->setExcel($n->getBooleanValue()),
            'groove' => fn(ParseNode $n) => $o->setGroove($n->getBooleanValue()),
            'infoPath' => fn(ParseNode $n) => $o->setInfoPath($n->getBooleanValue()),
            'lync' => fn(ParseNode $n) => $o->setLync($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'oneDrive' => fn(ParseNode $n) => $o->setOneDrive($n->getBooleanValue()),
            'oneNote' => fn(ParseNode $n) => $o->setOneNote($n->getBooleanValue()),
            'outlook' => fn(ParseNode $n) => $o->setOutlook($n->getBooleanValue()),
            'powerPoint' => fn(ParseNode $n) => $o->setPowerPoint($n->getBooleanValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getBooleanValue()),
            'sharePointDesigner' => fn(ParseNode $n) => $o->setSharePointDesigner($n->getBooleanValue()),
            'teams' => fn(ParseNode $n) => $o->setTeams($n->getBooleanValue()),
            'visio' => fn(ParseNode $n) => $o->setVisio($n->getBooleanValue()),
            'word' => fn(ParseNode $n) => $o->setWord($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the groove property value. The value for if MS Office OneDrive for Business - Groove should be excluded or not.
     * @return bool|null
    */
    public function getGroove(): ?bool {
        return $this->getBackingStore()->get('groove');
    }

    /**
     * Gets the infoPath property value. The value for if MS Office InfoPath should be excluded or not.
     * @return bool|null
    */
    public function getInfoPath(): ?bool {
        return $this->getBackingStore()->get('infoPath');
    }

    /**
     * Gets the lync property value. The value for if MS Office Skype for Business - Lync should be excluded or not.
     * @return bool|null
    */
    public function getLync(): ?bool {
        return $this->getBackingStore()->get('lync');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the oneDrive property value. The value for if MS Office OneDrive should be excluded or not.
     * @return bool|null
    */
    public function getOneDrive(): ?bool {
        return $this->getBackingStore()->get('oneDrive');
    }

    /**
     * Gets the oneNote property value. The value for if MS Office OneNote should be excluded or not.
     * @return bool|null
    */
    public function getOneNote(): ?bool {
        return $this->getBackingStore()->get('oneNote');
    }

    /**
     * Gets the outlook property value. The value for if MS Office Outlook should be excluded or not.
     * @return bool|null
    */
    public function getOutlook(): ?bool {
        return $this->getBackingStore()->get('outlook');
    }

    /**
     * Gets the powerPoint property value. The value for if MS Office PowerPoint should be excluded or not.
     * @return bool|null
    */
    public function getPowerPoint(): ?bool {
        return $this->getBackingStore()->get('powerPoint');
    }

    /**
     * Gets the publisher property value. The value for if MS Office Publisher should be excluded or not.
     * @return bool|null
    */
    public function getPublisher(): ?bool {
        return $this->getBackingStore()->get('publisher');
    }

    /**
     * Gets the sharePointDesigner property value. The value for if MS Office SharePointDesigner should be excluded or not.
     * @return bool|null
    */
    public function getSharePointDesigner(): ?bool {
        return $this->getBackingStore()->get('sharePointDesigner');
    }

    /**
     * Gets the teams property value. The value for if MS Office Teams should be excluded or not.
     * @return bool|null
    */
    public function getTeams(): ?bool {
        return $this->getBackingStore()->get('teams');
    }

    /**
     * Gets the visio property value. The value for if MS Office Visio should be excluded or not.
     * @return bool|null
    */
    public function getVisio(): ?bool {
        return $this->getBackingStore()->get('visio');
    }

    /**
     * Gets the word property value. The value for if MS Office Word should be excluded or not.
     * @return bool|null
    */
    public function getWord(): ?bool {
        return $this->getBackingStore()->get('word');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('access', $this->getAccess());
        $writer->writeBooleanValue('bing', $this->getBing());
        $writer->writeBooleanValue('excel', $this->getExcel());
        $writer->writeBooleanValue('groove', $this->getGroove());
        $writer->writeBooleanValue('infoPath', $this->getInfoPath());
        $writer->writeBooleanValue('lync', $this->getLync());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('oneDrive', $this->getOneDrive());
        $writer->writeBooleanValue('oneNote', $this->getOneNote());
        $writer->writeBooleanValue('outlook', $this->getOutlook());
        $writer->writeBooleanValue('powerPoint', $this->getPowerPoint());
        $writer->writeBooleanValue('publisher', $this->getPublisher());
        $writer->writeBooleanValue('sharePointDesigner', $this->getSharePointDesigner());
        $writer->writeBooleanValue('teams', $this->getTeams());
        $writer->writeBooleanValue('visio', $this->getVisio());
        $writer->writeBooleanValue('word', $this->getWord());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the access property value. The value for if MS Office Access should be excluded or not.
     * @param bool|null $value Value to set for the access property.
    */
    public function setAccess(?bool $value): void {
        $this->getBackingStore()->set('access', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bing property value. The value for if Microsoft Search as default should be excluded or not.
     * @param bool|null $value Value to set for the bing property.
    */
    public function setBing(?bool $value): void {
        $this->getBackingStore()->set('bing', $value);
    }

    /**
     * Sets the excel property value. The value for if MS Office Excel should be excluded or not.
     * @param bool|null $value Value to set for the excel property.
    */
    public function setExcel(?bool $value): void {
        $this->getBackingStore()->set('excel', $value);
    }

    /**
     * Sets the groove property value. The value for if MS Office OneDrive for Business - Groove should be excluded or not.
     * @param bool|null $value Value to set for the groove property.
    */
    public function setGroove(?bool $value): void {
        $this->getBackingStore()->set('groove', $value);
    }

    /**
     * Sets the infoPath property value. The value for if MS Office InfoPath should be excluded or not.
     * @param bool|null $value Value to set for the infoPath property.
    */
    public function setInfoPath(?bool $value): void {
        $this->getBackingStore()->set('infoPath', $value);
    }

    /**
     * Sets the lync property value. The value for if MS Office Skype for Business - Lync should be excluded or not.
     * @param bool|null $value Value to set for the lync property.
    */
    public function setLync(?bool $value): void {
        $this->getBackingStore()->set('lync', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the oneDrive property value. The value for if MS Office OneDrive should be excluded or not.
     * @param bool|null $value Value to set for the oneDrive property.
    */
    public function setOneDrive(?bool $value): void {
        $this->getBackingStore()->set('oneDrive', $value);
    }

    /**
     * Sets the oneNote property value. The value for if MS Office OneNote should be excluded or not.
     * @param bool|null $value Value to set for the oneNote property.
    */
    public function setOneNote(?bool $value): void {
        $this->getBackingStore()->set('oneNote', $value);
    }

    /**
     * Sets the outlook property value. The value for if MS Office Outlook should be excluded or not.
     * @param bool|null $value Value to set for the outlook property.
    */
    public function setOutlook(?bool $value): void {
        $this->getBackingStore()->set('outlook', $value);
    }

    /**
     * Sets the powerPoint property value. The value for if MS Office PowerPoint should be excluded or not.
     * @param bool|null $value Value to set for the powerPoint property.
    */
    public function setPowerPoint(?bool $value): void {
        $this->getBackingStore()->set('powerPoint', $value);
    }

    /**
     * Sets the publisher property value. The value for if MS Office Publisher should be excluded or not.
     * @param bool|null $value Value to set for the publisher property.
    */
    public function setPublisher(?bool $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the sharePointDesigner property value. The value for if MS Office SharePointDesigner should be excluded or not.
     * @param bool|null $value Value to set for the sharePointDesigner property.
    */
    public function setSharePointDesigner(?bool $value): void {
        $this->getBackingStore()->set('sharePointDesigner', $value);
    }

    /**
     * Sets the teams property value. The value for if MS Office Teams should be excluded or not.
     * @param bool|null $value Value to set for the teams property.
    */
    public function setTeams(?bool $value): void {
        $this->getBackingStore()->set('teams', $value);
    }

    /**
     * Sets the visio property value. The value for if MS Office Visio should be excluded or not.
     * @param bool|null $value Value to set for the visio property.
    */
    public function setVisio(?bool $value): void {
        $this->getBackingStore()->set('visio', $value);
    }

    /**
     * Sets the word property value. The value for if MS Office Word should be excluded or not.
     * @param bool|null $value Value to set for the word property.
    */
    public function setWord(?bool $value): void {
        $this->getBackingStore()->set('word', $value);
    }

}
