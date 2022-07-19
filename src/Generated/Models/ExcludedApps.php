<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExcludedApps implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $access The value for if MS Office Access should be excluded or not.
    */
    private ?bool $access = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $bing The value for if Microsoft Search as default should be excluded or not.
    */
    private ?bool $bing = null;
    
    /**
     * @var bool|null $excel The value for if MS Office Excel should be excluded or not.
    */
    private ?bool $excel = null;
    
    /**
     * @var bool|null $groove The value for if MS Office OneDrive for Business - Groove should be excluded or not.
    */
    private ?bool $groove = null;
    
    /**
     * @var bool|null $infoPath The value for if MS Office InfoPath should be excluded or not.
    */
    private ?bool $infoPath = null;
    
    /**
     * @var bool|null $lync The value for if MS Office Skype for Business - Lync should be excluded or not.
    */
    private ?bool $lync = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $oneDrive The value for if MS Office OneDrive should be excluded or not.
    */
    private ?bool $oneDrive = null;
    
    /**
     * @var bool|null $oneNote The value for if MS Office OneNote should be excluded or not.
    */
    private ?bool $oneNote = null;
    
    /**
     * @var bool|null $outlook The value for if MS Office Outlook should be excluded or not.
    */
    private ?bool $outlook = null;
    
    /**
     * @var bool|null $powerPoint The value for if MS Office PowerPoint should be excluded or not.
    */
    private ?bool $powerPoint = null;
    
    /**
     * @var bool|null $publisher The value for if MS Office Publisher should be excluded or not.
    */
    private ?bool $publisher = null;
    
    /**
     * @var bool|null $sharePointDesigner The value for if MS Office SharePointDesigner should be excluded or not.
    */
    private ?bool $sharePointDesigner = null;
    
    /**
     * @var bool|null $teams The value for if MS Office Teams should be excluded or not.
    */
    private ?bool $teams = null;
    
    /**
     * @var bool|null $visio The value for if MS Office Visio should be excluded or not.
    */
    private ?bool $visio = null;
    
    /**
     * @var bool|null $word The value for if MS Office Word should be excluded or not.
    */
    private ?bool $word = null;
    
    /**
     * Instantiates a new excludedApps and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.excludedApps');
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
        return $this->access;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bing property value. The value for if Microsoft Search as default should be excluded or not.
     * @return bool|null
    */
    public function getBing(): ?bool {
        return $this->bing;
    }

    /**
     * Gets the excel property value. The value for if MS Office Excel should be excluded or not.
     * @return bool|null
    */
    public function getExcel(): ?bool {
        return $this->excel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'access' => function (ParseNode $n) use ($o) { $o->setAccess($n->getBooleanValue()); },
            'bing' => function (ParseNode $n) use ($o) { $o->setBing($n->getBooleanValue()); },
            'excel' => function (ParseNode $n) use ($o) { $o->setExcel($n->getBooleanValue()); },
            'groove' => function (ParseNode $n) use ($o) { $o->setGroove($n->getBooleanValue()); },
            'infoPath' => function (ParseNode $n) use ($o) { $o->setInfoPath($n->getBooleanValue()); },
            'lync' => function (ParseNode $n) use ($o) { $o->setLync($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'oneDrive' => function (ParseNode $n) use ($o) { $o->setOneDrive($n->getBooleanValue()); },
            'oneNote' => function (ParseNode $n) use ($o) { $o->setOneNote($n->getBooleanValue()); },
            'outlook' => function (ParseNode $n) use ($o) { $o->setOutlook($n->getBooleanValue()); },
            'powerPoint' => function (ParseNode $n) use ($o) { $o->setPowerPoint($n->getBooleanValue()); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getBooleanValue()); },
            'sharePointDesigner' => function (ParseNode $n) use ($o) { $o->setSharePointDesigner($n->getBooleanValue()); },
            'teams' => function (ParseNode $n) use ($o) { $o->setTeams($n->getBooleanValue()); },
            'visio' => function (ParseNode $n) use ($o) { $o->setVisio($n->getBooleanValue()); },
            'word' => function (ParseNode $n) use ($o) { $o->setWord($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the groove property value. The value for if MS Office OneDrive for Business - Groove should be excluded or not.
     * @return bool|null
    */
    public function getGroove(): ?bool {
        return $this->groove;
    }

    /**
     * Gets the infoPath property value. The value for if MS Office InfoPath should be excluded or not.
     * @return bool|null
    */
    public function getInfoPath(): ?bool {
        return $this->infoPath;
    }

    /**
     * Gets the lync property value. The value for if MS Office Skype for Business - Lync should be excluded or not.
     * @return bool|null
    */
    public function getLync(): ?bool {
        return $this->lync;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the oneDrive property value. The value for if MS Office OneDrive should be excluded or not.
     * @return bool|null
    */
    public function getOneDrive(): ?bool {
        return $this->oneDrive;
    }

    /**
     * Gets the oneNote property value. The value for if MS Office OneNote should be excluded or not.
     * @return bool|null
    */
    public function getOneNote(): ?bool {
        return $this->oneNote;
    }

    /**
     * Gets the outlook property value. The value for if MS Office Outlook should be excluded or not.
     * @return bool|null
    */
    public function getOutlook(): ?bool {
        return $this->outlook;
    }

    /**
     * Gets the powerPoint property value. The value for if MS Office PowerPoint should be excluded or not.
     * @return bool|null
    */
    public function getPowerPoint(): ?bool {
        return $this->powerPoint;
    }

    /**
     * Gets the publisher property value. The value for if MS Office Publisher should be excluded or not.
     * @return bool|null
    */
    public function getPublisher(): ?bool {
        return $this->publisher;
    }

    /**
     * Gets the sharePointDesigner property value. The value for if MS Office SharePointDesigner should be excluded or not.
     * @return bool|null
    */
    public function getSharePointDesigner(): ?bool {
        return $this->sharePointDesigner;
    }

    /**
     * Gets the teams property value. The value for if MS Office Teams should be excluded or not.
     * @return bool|null
    */
    public function getTeams(): ?bool {
        return $this->teams;
    }

    /**
     * Gets the visio property value. The value for if MS Office Visio should be excluded or not.
     * @return bool|null
    */
    public function getVisio(): ?bool {
        return $this->visio;
    }

    /**
     * Gets the word property value. The value for if MS Office Word should be excluded or not.
     * @return bool|null
    */
    public function getWord(): ?bool {
        return $this->word;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('access', $this->access);
        $writer->writeBooleanValue('bing', $this->bing);
        $writer->writeBooleanValue('excel', $this->excel);
        $writer->writeBooleanValue('groove', $this->groove);
        $writer->writeBooleanValue('infoPath', $this->infoPath);
        $writer->writeBooleanValue('lync', $this->lync);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('oneDrive', $this->oneDrive);
        $writer->writeBooleanValue('oneNote', $this->oneNote);
        $writer->writeBooleanValue('outlook', $this->outlook);
        $writer->writeBooleanValue('powerPoint', $this->powerPoint);
        $writer->writeBooleanValue('publisher', $this->publisher);
        $writer->writeBooleanValue('sharePointDesigner', $this->sharePointDesigner);
        $writer->writeBooleanValue('teams', $this->teams);
        $writer->writeBooleanValue('visio', $this->visio);
        $writer->writeBooleanValue('word', $this->word);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the access property value. The value for if MS Office Access should be excluded or not.
     *  @param bool|null $value Value to set for the access property.
    */
    public function setAccess(?bool $value ): void {
        $this->access = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the bing property value. The value for if Microsoft Search as default should be excluded or not.
     *  @param bool|null $value Value to set for the bing property.
    */
    public function setBing(?bool $value ): void {
        $this->bing = $value;
    }

    /**
     * Sets the excel property value. The value for if MS Office Excel should be excluded or not.
     *  @param bool|null $value Value to set for the excel property.
    */
    public function setExcel(?bool $value ): void {
        $this->excel = $value;
    }

    /**
     * Sets the groove property value. The value for if MS Office OneDrive for Business - Groove should be excluded or not.
     *  @param bool|null $value Value to set for the groove property.
    */
    public function setGroove(?bool $value ): void {
        $this->groove = $value;
    }

    /**
     * Sets the infoPath property value. The value for if MS Office InfoPath should be excluded or not.
     *  @param bool|null $value Value to set for the infoPath property.
    */
    public function setInfoPath(?bool $value ): void {
        $this->infoPath = $value;
    }

    /**
     * Sets the lync property value. The value for if MS Office Skype for Business - Lync should be excluded or not.
     *  @param bool|null $value Value to set for the lync property.
    */
    public function setLync(?bool $value ): void {
        $this->lync = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the oneDrive property value. The value for if MS Office OneDrive should be excluded or not.
     *  @param bool|null $value Value to set for the oneDrive property.
    */
    public function setOneDrive(?bool $value ): void {
        $this->oneDrive = $value;
    }

    /**
     * Sets the oneNote property value. The value for if MS Office OneNote should be excluded or not.
     *  @param bool|null $value Value to set for the oneNote property.
    */
    public function setOneNote(?bool $value ): void {
        $this->oneNote = $value;
    }

    /**
     * Sets the outlook property value. The value for if MS Office Outlook should be excluded or not.
     *  @param bool|null $value Value to set for the outlook property.
    */
    public function setOutlook(?bool $value ): void {
        $this->outlook = $value;
    }

    /**
     * Sets the powerPoint property value. The value for if MS Office PowerPoint should be excluded or not.
     *  @param bool|null $value Value to set for the powerPoint property.
    */
    public function setPowerPoint(?bool $value ): void {
        $this->powerPoint = $value;
    }

    /**
     * Sets the publisher property value. The value for if MS Office Publisher should be excluded or not.
     *  @param bool|null $value Value to set for the publisher property.
    */
    public function setPublisher(?bool $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the sharePointDesigner property value. The value for if MS Office SharePointDesigner should be excluded or not.
     *  @param bool|null $value Value to set for the sharePointDesigner property.
    */
    public function setSharePointDesigner(?bool $value ): void {
        $this->sharePointDesigner = $value;
    }

    /**
     * Sets the teams property value. The value for if MS Office Teams should be excluded or not.
     *  @param bool|null $value Value to set for the teams property.
    */
    public function setTeams(?bool $value ): void {
        $this->teams = $value;
    }

    /**
     * Sets the visio property value. The value for if MS Office Visio should be excluded or not.
     *  @param bool|null $value Value to set for the visio property.
    */
    public function setVisio(?bool $value ): void {
        $this->visio = $value;
    }

    /**
     * Sets the word property value. The value for if MS Office Word should be excluded or not.
     *  @param bool|null $value Value to set for the word property.
    */
    public function setWord(?bool $value ): void {
        $this->word = $value;
    }

}
