<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains PowerShell script properties to detect a Win32 App
*/
class Win32LobAppPowerShellScriptRequirement extends Win32LobAppRequirement implements Parsable 
{
    /**
     * Instantiates a new win32LobAppPowerShellScriptRequirement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppPowerShellScriptRequirement');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppPowerShellScriptRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppPowerShellScriptRequirement {
        return new Win32LobAppPowerShellScriptRequirement();
    }

    /**
     * Gets the detectionType property value. Contains all supported Powershell Script output detection type.
     * @return Win32LobAppPowerShellScriptDetectionType|null
    */
    public function getDetectionType(): ?Win32LobAppPowerShellScriptDetectionType {
        $val = $this->getBackingStore()->get('detectionType');
        if (is_null($val) || $val instanceof Win32LobAppPowerShellScriptDetectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionType'");
    }

    /**
     * Gets the displayName property value. The unique display name for this rule
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the enforceSignatureCheck property value. A value indicating whether signature check is enforced
     * @return bool|null
    */
    public function getEnforceSignatureCheck(): ?bool {
        $val = $this->getBackingStore()->get('enforceSignatureCheck');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforceSignatureCheck'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionType' => fn(ParseNode $n) => $o->setDetectionType($n->getEnumValue(Win32LobAppPowerShellScriptDetectionType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforceSignatureCheck' => fn(ParseNode $n) => $o->setEnforceSignatureCheck($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'runAs32Bit' => fn(ParseNode $n) => $o->setRunAs32Bit($n->getBooleanValue()),
            'runAsAccount' => fn(ParseNode $n) => $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)),
            'scriptContent' => fn(ParseNode $n) => $o->setScriptContent($n->getStringValue()),
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
     * Gets the runAs32Bit property value. A value indicating whether this script should run as 32-bit
     * @return bool|null
    */
    public function getRunAs32Bit(): ?bool {
        $val = $this->getBackingStore()->get('runAs32Bit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runAs32Bit'");
    }

    /**
     * Gets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        $val = $this->getBackingStore()->get('runAsAccount');
        if (is_null($val) || $val instanceof RunAsAccountType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runAsAccount'");
    }

    /**
     * Gets the scriptContent property value. The base64 encoded script content to detect Win32 Line of Business (LoB) app
     * @return string|null
    */
    public function getScriptContent(): ?string {
        $val = $this->getBackingStore()->get('scriptContent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scriptContent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionType', $this->getDetectionType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('enforceSignatureCheck', $this->getEnforceSignatureCheck());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('runAs32Bit', $this->getRunAs32Bit());
        $writer->writeEnumValue('runAsAccount', $this->getRunAsAccount());
        $writer->writeStringValue('scriptContent', $this->getScriptContent());
    }

    /**
     * Sets the detectionType property value. Contains all supported Powershell Script output detection type.
     * @param Win32LobAppPowerShellScriptDetectionType|null $value Value to set for the detectionType property.
    */
    public function setDetectionType(?Win32LobAppPowerShellScriptDetectionType $value): void {
        $this->getBackingStore()->set('detectionType', $value);
    }

    /**
     * Sets the displayName property value. The unique display name for this rule
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enforceSignatureCheck property value. A value indicating whether signature check is enforced
     * @param bool|null $value Value to set for the enforceSignatureCheck property.
    */
    public function setEnforceSignatureCheck(?bool $value): void {
        $this->getBackingStore()->set('enforceSignatureCheck', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the runAs32Bit property value. A value indicating whether this script should run as 32-bit
     * @param bool|null $value Value to set for the runAs32Bit property.
    */
    public function setRunAs32Bit(?bool $value): void {
        $this->getBackingStore()->set('runAs32Bit', $value);
    }

    /**
     * Sets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value): void {
        $this->getBackingStore()->set('runAsAccount', $value);
    }

    /**
     * Sets the scriptContent property value. The base64 encoded script content to detect Win32 Line of Business (LoB) app
     * @param string|null $value Value to set for the scriptContent property.
    */
    public function setScriptContent(?string $value): void {
        $this->getBackingStore()->set('scriptContent', $value);
    }

}
