<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\MicrosoftGraphSecurityContentManagementConnect;

use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\DeploymentIdentity;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\DeploymentScope;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\RepositoryAccessCredential;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\RepositoryContentType;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\RepositorySettings;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\RepositoryType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConnectPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConnectPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectPostRequestBody {
        return new ConnectPostRequestBody();
    }

    /**
     * Gets the accessCredential property value. Provider credential used to establish or refresh repository access. The concrete type(set via `@odata.type`) selects the credential style. All fields are input only and arenever returned.
     * @return RepositoryAccessCredential|null
    */
    public function getAccessCredential(): ?RepositoryAccessCredential {
        $val = $this->getBackingStore()->get('accessCredential');
        if (is_null($val) || $val instanceof RepositoryAccessCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessCredential'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentTypes property value. The contentTypes property
     * @return array<RepositoryContentType>|null
    */
    public function getContentTypes(): ?array {
        $val = $this->getBackingStore()->get('contentTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RepositoryContentType::class);
            /** @var array<RepositoryContentType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentTypes'");
    }

    /**
     * Gets the deploymentIdentity property value. The deploymentIdentity property
     * @return DeploymentIdentity|null
    */
    public function getDeploymentIdentity(): ?DeploymentIdentity {
        $val = $this->getBackingStore()->get('deploymentIdentity');
        if (is_null($val) || $val instanceof DeploymentIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentIdentity'");
    }

    /**
     * Gets the deploymentScope property value. The deploymentScope property
     * @return DeploymentScope|null
    */
    public function getDeploymentScope(): ?DeploymentScope {
        $val = $this->getBackingStore()->get('deploymentScope');
        if (is_null($val) || $val instanceof DeploymentScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentScope'");
    }

    /**
     * Gets the description property value. The description property
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
     * Gets the displayName property value. The displayName property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessCredential' => fn(ParseNode $n) => $o->setAccessCredential($n->getObjectValue([RepositoryAccessCredential::class, 'createFromDiscriminatorValue'])),
            'contentTypes' => fn(ParseNode $n) => $o->setContentTypes($n->getCollectionOfEnumValues(RepositoryContentType::class)),
            'deploymentIdentity' => fn(ParseNode $n) => $o->setDeploymentIdentity($n->getObjectValue([DeploymentIdentity::class, 'createFromDiscriminatorValue'])),
            'deploymentScope' => fn(ParseNode $n) => $o->setDeploymentScope($n->getObjectValue([DeploymentScope::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'repoType' => fn(ParseNode $n) => $o->setRepoType($n->getEnumValue(RepositoryType::class)),
            'sourceLocation' => fn(ParseNode $n) => $o->setSourceLocation($n->getObjectValue([RepositorySettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the repoType property value. Source-control provider.
     * @return RepositoryType|null
    */
    public function getRepoType(): ?RepositoryType {
        $val = $this->getBackingStore()->get('repoType');
        if (is_null($val) || $val instanceof RepositoryType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'repoType'");
    }

    /**
     * Gets the sourceLocation property value. Repository location settings.
     * @return RepositorySettings|null
    */
    public function getSourceLocation(): ?RepositorySettings {
        $val = $this->getBackingStore()->get('sourceLocation');
        if (is_null($val) || $val instanceof RepositorySettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceLocation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessCredential', $this->getAccessCredential());
        $writer->writeCollectionOfEnumValues('contentTypes', $this->getContentTypes());
        $writer->writeObjectValue('deploymentIdentity', $this->getDeploymentIdentity());
        $writer->writeObjectValue('deploymentScope', $this->getDeploymentScope());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('repoType', $this->getRepoType());
        $writer->writeObjectValue('sourceLocation', $this->getSourceLocation());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessCredential property value. Provider credential used to establish or refresh repository access. The concrete type(set via `@odata.type`) selects the credential style. All fields are input only and arenever returned.
     * @param RepositoryAccessCredential|null $value Value to set for the accessCredential property.
    */
    public function setAccessCredential(?RepositoryAccessCredential $value): void {
        $this->getBackingStore()->set('accessCredential', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentTypes property value. The contentTypes property
     * @param array<RepositoryContentType>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value): void {
        $this->getBackingStore()->set('contentTypes', $value);
    }

    /**
     * Sets the deploymentIdentity property value. The deploymentIdentity property
     * @param DeploymentIdentity|null $value Value to set for the deploymentIdentity property.
    */
    public function setDeploymentIdentity(?DeploymentIdentity $value): void {
        $this->getBackingStore()->set('deploymentIdentity', $value);
    }

    /**
     * Sets the deploymentScope property value. The deploymentScope property
     * @param DeploymentScope|null $value Value to set for the deploymentScope property.
    */
    public function setDeploymentScope(?DeploymentScope $value): void {
        $this->getBackingStore()->set('deploymentScope', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the repoType property value. Source-control provider.
     * @param RepositoryType|null $value Value to set for the repoType property.
    */
    public function setRepoType(?RepositoryType $value): void {
        $this->getBackingStore()->set('repoType', $value);
    }

    /**
     * Sets the sourceLocation property value. Repository location settings.
     * @param RepositorySettings|null $value Value to set for the sourceLocation property.
    */
    public function setSourceLocation(?RepositorySettings $value): void {
        $this->getBackingStore()->set('sourceLocation', $value);
    }

}
