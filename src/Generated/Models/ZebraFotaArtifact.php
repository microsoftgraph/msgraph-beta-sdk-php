<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes a single artifact for a specific device model.
*/
class ZebraFotaArtifact extends Entity implements Parsable 
{
    /**
     * Instantiates a new zebraFotaArtifact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('boardSupportPackageVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'boardSupportPackageVersion'");
    }

    /**
     * Gets the description property value. Artifact description. (e.g.: `LifeGuard Update 98 (released 24-September-2021)
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the deviceModel property value. Applicable device model (e.g.: TC8300)
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        $val = $this->getBackingStore()->get('deviceModel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceModel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'boardSupportPackageVersion' => fn(ParseNode $n) => $o->setBoardSupportPackageVersion($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'patchVersion' => fn(ParseNode $n) => $o->setPatchVersion($n->getStringValue()),
            'releaseNotesUrl' => fn(ParseNode $n) => $o->setReleaseNotesUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the osVersion property value. Artifact OS version (e.g.: 8.1.0)
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the patchVersion property value. Artifact patch version (e.g.: U00)
     * @return string|null
    */
    public function getPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('patchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'patchVersion'");
    }

    /**
     * Gets the releaseNotesUrl property value. Artifact release notes URL (e.g.: https://www.zebra.com/<filename.pdf>)
     * @return string|null
    */
    public function getReleaseNotesUrl(): ?string {
        $val = $this->getBackingStore()->get('releaseNotesUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseNotesUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('boardSupportPackageVersion', $this->getBoardSupportPackageVersion());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('patchVersion', $this->getPatchVersion());
        $writer->writeStringValue('releaseNotesUrl', $this->getReleaseNotesUrl());
    }

    /**
     * Sets the boardSupportPackageVersion property value. The version of the Board Support Package (BSP. E.g.: 01.18.02.00)
     * @param string|null $value Value to set for the boardSupportPackageVersion property.
    */
    public function setBoardSupportPackageVersion(?string $value): void {
        $this->getBackingStore()->set('boardSupportPackageVersion', $value);
    }

    /**
     * Sets the description property value. Artifact description. (e.g.: `LifeGuard Update 98 (released 24-September-2021)
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceModel property value. Applicable device model (e.g.: TC8300)
     * @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osVersion property value. Artifact OS version (e.g.: 8.1.0)
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the patchVersion property value. Artifact patch version (e.g.: U00)
     * @param string|null $value Value to set for the patchVersion property.
    */
    public function setPatchVersion(?string $value): void {
        $this->getBackingStore()->set('patchVersion', $value);
    }

    /**
     * Sets the releaseNotesUrl property value. Artifact release notes URL (e.g.: https://www.zebra.com/<filename.pdf>)
     * @param string|null $value Value to set for the releaseNotesUrl property.
    */
    public function setReleaseNotesUrl(?string $value): void {
        $this->getBackingStore()->set('releaseNotesUrl', $value);
    }

}
