<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppPowerShellScriptDetection extends Win32LobAppDetection implements Parsable 
{
    /**
     * @var bool|null $enforceSignatureCheck A value indicating whether signature check is enforced
    */
    private ?bool $enforceSignatureCheck = null;
    
    /**
     * @var bool|null $runAs32Bit A value indicating whether this script should run as 32-bit
    */
    private ?bool $runAs32Bit = null;
    
    /**
     * @var string|null $scriptContent The base64 encoded script content to detect Win32 Line of Business (LoB) app
    */
    private ?string $scriptContent = null;
    
    /**
     * Instantiates a new Win32LobAppPowerShellScriptDetection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppPowerShellScriptDetection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppPowerShellScriptDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppPowerShellScriptDetection {
        return new Win32LobAppPowerShellScriptDetection();
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
            'enforceSignatureCheck' => function (ParseNode $n) use ($o) { $o->setEnforceSignatureCheck($n->getBooleanValue()); },
            'runAs32Bit' => function (ParseNode $n) use ($o) { $o->setRunAs32Bit($n->getBooleanValue()); },
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
        $writer->writeBooleanValue('enforceSignatureCheck', $this->enforceSignatureCheck);
        $writer->writeBooleanValue('runAs32Bit', $this->runAs32Bit);
        $writer->writeStringValue('scriptContent', $this->scriptContent);
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
     * Sets the scriptContent property value. The base64 encoded script content to detect Win32 Line of Business (LoB) app
     *  @param string|null $value Value to set for the scriptContent property.
    */
    public function setScriptContent(?string $value ): void {
        $this->scriptContent = $value;
    }

}
