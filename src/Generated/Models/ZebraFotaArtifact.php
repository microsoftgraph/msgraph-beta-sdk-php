<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ZebraFotaArtifact extends Entity implements Parsable 
{
    /**
     * @var string|null $boardSupportPackageVersion The version of the Board Support Package (BSP. E.g.: 01.18.02.00)
    */
    private ?string $boardSupportPackageVersion = null;
    
    /**
     * @var string|null $description Artifact description. (e.g.: `LifeGuard Update 98 (released 24-September-2021)
    */
    private ?string $description = null;
    
    /**
     * @var string|null $deviceModel Applicable device model (e.g.: TC8300)
    */
    private ?string $deviceModel = null;
    
    /**
     * @var string|null $osVersion Artifact OS version (e.g.: 8.1.0)
    */
    private ?string $osVersion = null;
    
    /**
     * @var string|null $patchVersion Artifact patch version (e.g.: U00)
    */
    private ?string $patchVersion = null;
    
    /**
     * @var string|null $releaseNotesUrl Artifact release notes URL (e.g.: https://www.zebra.com/<filename.pdf>)
    */
    private ?string $releaseNotesUrl = null;
    
    /**
     * Instantiates a new zebraFotaArtifact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.zebraFotaArtifact');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ZebraFotaArtifact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ZebraFotaArtifact {
        return new ZebraFotaArtifact();
    }

    /**
     * Gets the boardSupportPackageVersion property value. The version of the Board Support Package (BSP. E.g.: 01.18.02.00)
     * @return string|null
    */
    public function getBoardSupportPackageVersion(): ?string {
        return $this->boardSupportPackageVersion;
    }

    /**
     * Gets the description property value. Artifact description. (e.g.: `LifeGuard Update 98 (released 24-September-2021)
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceModel property value. Applicable device model (e.g.: TC8300)
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->deviceModel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'boardSupportPackageVersion' => function (ParseNode $n) use ($o) { $o->setBoardSupportPackageVersion($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'deviceModel' => function (ParseNode $n) use ($o) { $o->setDeviceModel($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'patchVersion' => function (ParseNode $n) use ($o) { $o->setPatchVersion($n->getStringValue()); },
            'releaseNotesUrl' => function (ParseNode $n) use ($o) { $o->setReleaseNotesUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the osVersion property value. Artifact OS version (e.g.: 8.1.0)
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the patchVersion property value. Artifact patch version (e.g.: U00)
     * @return string|null
    */
    public function getPatchVersion(): ?string {
        return $this->patchVersion;
    }

    /**
     * Gets the releaseNotesUrl property value. Artifact release notes URL (e.g.: https://www.zebra.com/<filename.pdf>)
     * @return string|null
    */
    public function getReleaseNotesUrl(): ?string {
        return $this->releaseNotesUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('boardSupportPackageVersion', $this->boardSupportPackageVersion);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeStringValue('patchVersion', $this->patchVersion);
        $writer->writeStringValue('releaseNotesUrl', $this->releaseNotesUrl);
    }

    /**
     * Sets the boardSupportPackageVersion property value. The version of the Board Support Package (BSP. E.g.: 01.18.02.00)
     *  @param string|null $value Value to set for the boardSupportPackageVersion property.
    */
    public function setBoardSupportPackageVersion(?string $value ): void {
        $this->boardSupportPackageVersion = $value;
    }

    /**
     * Sets the description property value. Artifact description. (e.g.: `LifeGuard Update 98 (released 24-September-2021)
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceModel property value. Applicable device model (e.g.: TC8300)
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value ): void {
        $this->deviceModel = $value;
    }

    /**
     * Sets the osVersion property value. Artifact OS version (e.g.: 8.1.0)
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the patchVersion property value. Artifact patch version (e.g.: U00)
     *  @param string|null $value Value to set for the patchVersion property.
    */
    public function setPatchVersion(?string $value ): void {
        $this->patchVersion = $value;
    }

    /**
     * Sets the releaseNotesUrl property value. Artifact release notes URL (e.g.: https://www.zebra.com/<filename.pdf>)
     *  @param string|null $value Value to set for the releaseNotesUrl property.
    */
    public function setReleaseNotesUrl(?string $value ): void {
        $this->releaseNotesUrl = $value;
    }

}
