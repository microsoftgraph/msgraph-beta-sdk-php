<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppPowerShellScriptRequirement extends Win32LobAppRequirement implements Parsable 
{
    /**
     * @var Win32LobAppPowerShellScriptDetectionType|null $detectionType Contains all supported Powershell Script output detection type.
    */
    private ?Win32LobAppPowerShellScriptDetectionType $detectionType = null;
    
    /**
     * @var string|null $displayName The unique display name for this rule
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enforceSignatureCheck A value indicating whether signature check is enforced
    */
    private ?bool $enforceSignatureCheck = null;
    
    /**
     * @var bool|null $runAs32Bit A value indicating whether this script should run as 32-bit
    */
    private ?bool $runAs32Bit = null;
    
    /**
     * @var RunAsAccountType|null $runAsAccount Indicates the type of execution context the app runs in.
    */
    private ?RunAsAccountType $runAsAccount = null;
    
    /**
     * @var string|null $scriptContent The base64 encoded script content to detect Win32 Line of Business (LoB) app
    */
    private ?string $scriptContent = null;
    
    /**
     * Instantiates a new Win32LobAppPowerShellScriptRequirement and sets the default values.
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
        return $this->detectionType;
    }

    /**
     * Gets the displayName property value. The unique display name for this rule
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enforceSignatureCheck property value. A value indicating whether signature check is enforced
     * @return bool|null
    */
    public function getEnforceSignatureCheck(): ?bool {
        return $this->enforceSignatureCheck;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionType' => function (ParseNode $n) use ($o) { $o->setDetectionType($n->getEnumValue(Win32LobAppPowerShellScriptDetectionType::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enforceSignatureCheck' => function (ParseNode $n) use ($o) { $o->setEnforceSignatureCheck($n->getBooleanValue()); },
            'runAs32Bit' => function (ParseNode $n) use ($o) { $o->setRunAs32Bit($n->getBooleanValue()); },
            'runAsAccount' => function (ParseNode $n) use ($o) { $o->setRunAsAccount($n->getEnumValue(RunAsAccountType::class)); },
            'scriptContent' => function (ParseNode $n) use ($o) { $o->setScriptContent($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the runAs32Bit property value. A value indicating whether this script should run as 32-bit
     * @return bool|null
    */
    public function getRunAs32Bit(): ?bool {
        return $this->runAs32Bit;
    }

    /**
     * Gets the runAsAccount property value. Indicates the type of execution context the app runs in.
     * @return RunAsAccountType|null
    */
    public function getRunAsAccount(): ?RunAsAccountType {
        return $this->runAsAccount;
    }

    /**
     * Gets the scriptContent property value. The base64 encoded script content to detect Win32 Line of Business (LoB) app
     * @return string|null
    */
    public function getScriptContent(): ?string {
        return $this->scriptContent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionType', $this->detectionType);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enforceSignatureCheck', $this->enforceSignatureCheck);
        $writer->writeBooleanValue('runAs32Bit', $this->runAs32Bit);
        $writer->writeEnumValue('runAsAccount', $this->runAsAccount);
        $writer->writeStringValue('scriptContent', $this->scriptContent);
    }

    /**
     * Sets the detectionType property value. Contains all supported Powershell Script output detection type.
     *  @param Win32LobAppPowerShellScriptDetectionType|null $value Value to set for the detectionType property.
    */
    public function setDetectionType(?Win32LobAppPowerShellScriptDetectionType $value ): void {
        $this->detectionType = $value;
    }

    /**
     * Sets the displayName property value. The unique display name for this rule
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enforceSignatureCheck property value. A value indicating whether signature check is enforced
     *  @param bool|null $value Value to set for the enforceSignatureCheck property.
    */
    public function setEnforceSignatureCheck(?bool $value ): void {
        $this->enforceSignatureCheck = $value;
    }

    /**
     * Sets the runAs32Bit property value. A value indicating whether this script should run as 32-bit
     *  @param bool|null $value Value to set for the runAs32Bit property.
    */
    public function setRunAs32Bit(?bool $value ): void {
        $this->runAs32Bit = $value;
    }

    /**
     * Sets the runAsAccount property value. Indicates the type of execution context the app runs in.
     *  @param RunAsAccountType|null $value Value to set for the runAsAccount property.
    */
    public function setRunAsAccount(?RunAsAccountType $value ): void {
        $this->runAsAccount = $value;
    }

    /**
     * Sets the scriptContent property value. The base64 encoded script content to detect Win32 Line of Business (LoB) app
     *  @param string|null $value Value to set for the scriptContent property.
    */
    public function setScriptContent(?string $value ): void {
        $this->scriptContent = $value;
    }

}
